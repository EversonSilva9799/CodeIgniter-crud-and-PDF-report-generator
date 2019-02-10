<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

    /**
     * Pega todos os colaboradores no banco
     */
    public function index($page=0)
    {
        $this->load->model('colaborador');
        $this->load->library('pagination');

        $colaboradores = $this->colaborador->getPaginate(7 , $page);

        $this->pagination->initialize([
            'total_rows' => $this->db->count_all('colaboradores'),
            'per_page' => 7,
            'base_url' => '/colaboradores/index',
            'first_link' => 'Primeiro',
            'last_link' => 'Último'
        ]);
        

        $this->load->view('colaboradores/index', [
            'colaboradores' => $colaboradores
        ]);
    }

    /**
     * Exibe detalhes de um colaborador específico
     */
    public function show($id)
    {
        $this->load->model('colaborador');
        
        $colaborador = $this->colaborador->get($id);

        if (!$colaborador) {
            $this->session->set_flashdata('error' , 'Não foi possível realizar esta ação. Possivelmente esse colaborador não existe');
            redirect(base_url('index.php/colaboradores'));
        }
        $empresa = "";
        if($colaborador->empresa_id) {
           // Empresa a qual àquele cliente está associado
            $empresa = $this->colaborador->empresa($colaborador->empresa_id); 
        }
        $this->load->view('colaboradores/show', [
            'colaborador' => $colaborador,
            'empresa' => $empresa
            ]);

    }

    /**
     * Cadastra um colaborador no sistema
     */
    public function cadastro()
    {   
        
        $this->load->helper(['form', 'url']);
        $this->load->model(['colaborador', 'empresa']);

  
        
        //Pegando a empresa para o colaborador poder escolher uma
        $empresas = $this->empresa->getAll();

        if(!$this->colaborador->validaForm()) { 
            $this->load->view('colaboradores/cadastro', [
                'empresas' => $empresas
            ]);
        }
        else {
           $insert = $this->colaborador->insert([
               'nome' => $this->input->post('nome'),
               'email' => $this->input->post('email'),
               'cpf' => $this->input->post('cpf'),
               'sexo' => $this->input->post('sexo'),
               'empresa_id' => $this->input->post('empresa_id'),
           ]);

           if ($insert) {
            $this->session->set_flashdata('success', 'Colaborador cadastrado');
            redirect(base_url('index.php/colaboradores'));
           }

        }

    }

    

    /*
    * Atualiza um colaborador do sistema
    */
    public function update($id)
    {
        $this->load->helper(['form', 'url']);
        $this->load->model(['colaborador', 'empresa']);
        $this->load->database();

        //Pegando a empresa para o colaborador poder escolher uma
        $empresas = $this->empresa->getAll();

        $colaborador = $this->colaborador->get($id);

        if ($colaborador) {
            if (!$colaborador->validaForm()) {
                $this->load->view('colaboradores/update', [
                    'colaborador' => $colaborador,
                    'empresas' => $empresas
                ]);
            }
            else 
            {
                $updated = $this->colaborador->update([
                    'nome' => $this->input->post('nome'),
                    'email' => $this->input->post('email'),
                    'cpf' => $this->input->post('cpf'),
                    'sexo' => $this->input->post('sexo'),
                    'empresa_id' => $this->input->post('empresa_id')
                ], $id);

                if ( $updated ) {
                    $this->session->set_flashdata('success', 'Colaborador atualizado');
                    redirect(base_url('index.php/colaboradores'));
                }
                $this->session->set_flashdata('error', 'Não foi possível atualizar o colaborador');
                redirect(base_url('index.php/colaboradores'));
            }
        }
    }


    /*
     * Deleta um colaborador do sistema 
     */
    public function delete($id)
    {
        $this->load->model('colaborador');

        $deleted = $this->colaborador->delete($id);

        if ($deleted) {
            $this->session->set_flashdata('success', 'Colaborador deletado');
            redirect(base_url('index.php/colaboradores'));
        }
        else {
            $this->session->set_flashdata('error', 'Colaborador não deletado');
             redirect(base_url('index.php/colaboradores'));
        }
           
    }
	
}
