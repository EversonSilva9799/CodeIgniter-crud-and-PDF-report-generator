<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {


    public function index($page=0)
    {
        $this->load->database();

        $colaboradores = $this->db->get('colaboradores','5' , $page)->result();

        $this->load->library('pagination');
        
        $this->pagination->initialize([
            'total_rows' => $this->db->count_all('colaboradores'),
            'per_page' => 5,
            'base_url' => '/colaboradores/index',
            'first_link' => 'Primeiro',
            'last_link' => 'Último'
        ]);
        

        $this->load->view('colaboradores/index', [
            'colaboradores' => $colaboradores
        ]);
    }

    public function show($id)
    {

    }

    public function cadastro()
    {   
        
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->load->database();

        //Pegando a empresa para o colaborador poder escolher uma
        $this->db->select('id_empresa, nome');
        $empresas = $this->db->get('empresas')->result();
        

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[50]|min_length[4]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[50]|min_length[4]');
        $this->form_validation->set_rules('cpf', 'CPF', 'trim|required|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('sexo', 'Sexo', 'trim|required|alpha|min_length[1]|max_length[1]');
       // $this->form_validation->set_rules('empresa_id', 'Empresa');


        if(!$this->form_validation->run()) { 
            $this->load->view('colaboradores/cadastro', [
                'empresas' => $empresas
            ]);
        }
        else {
           $insert = $this->db->insert('colaboradores', $this->input->post());

           if ($insert) {
               header("LOCATION: /colaboradores");
           }

        }

    }

    public function destroy($id)
    {
        
    }
	
}
