<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {

    /**
     * Lista todas as empresas do banco de dados com uma paginação
     */
    public function index($page=0)
    {
        //$this->output->enable_profiler(TRUE);
        // $this->session->set_userdata('nome', 'Everson');

        $this->load->model('empresa');
        $this->load->library('pagination');

        $empresas = $this->empresa->getAll(7, $page);

        $this->pagination->initialize([
            'total_rows' => $this->db->count_all('empresas'),
            'per_page' => 7,
            'base_url' => '/empresas/index',
            'first_link' => 'Primeiro',
            'last_link' => 'Último'
        ]);
        
        $this->load->view('empresas/index', [
            'empresas' => $empresas
        ]);

    }

    
    /**
     * Exibe detalhes de uma empresa
     */
    public function show($id)
    {    
        $this->load->model('empresa');
        $empresa = $this->empresa->get($id);

        if (!$empresa) {
            $this->session->set_flashdata('error', 'Não foi possível realizar esta ação. Provavelmente a Empresa não existe');
            redirect(base_url('index.php/empresas'));
        }

        //Colaboradores associados àquela empresa
        $colaboradores = $this->empresa->colaboradores($id);

        $this->load->view('empresas/show', [
            'empresa' => $empresa,
            'colaboradores' => $colaboradores
        ]);
    }


    /**
     * Cadastra uma nova empresa no sistema - com validação de dados do formulário
     */
    public function cadastro()
    {   
        $this->load->model('empresa');
        $this->load->helper(['form', 'url']);
        
       
        if(!$this->empresa->validaForm()) { 
            $this->load->view('empresas/cadastro'  );
        }
        else {
            $insert = $this->empresa->insert([
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'cnpj' => $this->input->post('cnpj')
            ]);

           if ($insert) {
               $this->session->set_flashdata('success', 'Empresa Cadastrada');
               redirect(base_url('index.php/empresas'));
           }
        }    
    }

    /**
     * Atualiza uma empresa do banco - com validação de de dados do formulário
     */
    public function update($id)
    {
        $this->load->helper(['form', 'url']);
        $this->load->model('empresa');

        $empresa = $this->empresa->get($id);

        if ($empresa) {
            if(!$this->empresa->validaForm()) { 
                $this->load->view('empresas/update', [
                    'empresa' => $empresa
                ]);
            }
            else {
                //$updated = $this->empresa->update($this->input->post(), $id);
                $updated = $this->empresa->update([
                    'nome' => $this->input->post('nome'),
                    'cnpj' => $this->input->post('cnpj'),
                    'email' => $this->input->post('email')

                ], $id);
                if ($updated) {
                    $this->session->set_flashdata('success', 'Empresa Atualizada');
                    redirect(base_url('index.php/empresas'));
                }
                $this->session->set_flashdata('error', 'Erro ao atualizar empresa');
                redirect(base_url('index.php/empresas'));
            }
        } 
        else {
            $this->session->set_flashdata('error', 'Não foi possível realizar esta ação. Provavelmente a Empresa não existe');
            redirect(base_url('index.php/empresas'));
        }
        
    }

    /**
     * Deleta uma empresa do sistema, verificando se a empresa tem colaboradores ativos
     * e se tiver não é permitida a exclusão
     */
    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('empresa');

        if ($this->empresa->colaboradores($id)) {
            $this->session->set_flashdata('error', 'Não foi possível deletar. A Empresa contém colaboradores associados');
            redirect(base_url('index.php/empresas'));
        }
        if($this->empresa->delete($id)) {
            $this->session->set_flashdata('success', 'Empresa deletada');
            redirect(base_url('index.php/empresas'));
        }
        else {
            show_error('Erro ao excluir');
        }
    }	
}
