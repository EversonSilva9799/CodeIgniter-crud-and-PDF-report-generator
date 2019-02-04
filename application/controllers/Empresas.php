<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {


    public function index($page=0)
    {

        $this->load->database();
        $this->load->model('empresa');

        $empresas = $this->empresa->getAll(5, $page);

        $this->load->library('pagination');

        $this->pagination->initialize([
            'total_rows' => $this->db->count_all('empresas'),
            'per_page' => 5,
            'base_url' => '/empresas/index',
            'first_link' => 'Primeiro',
            'last_link' => 'Último'
        ]);
        
        $this->load->view('empresas/index', [
            'empresas' => $empresas
        ]);
    }

    /*Exibe detalhes de uma empresa */
    public function show($id)
    {   
      
        $this->load->model('empresa');
        $empresa = $this->empresa->get($id);

        $this->load->view('empresas/show', ['empresa' => $empresa]);
    }


    /**
     * Cadastra uma nova empresa no sistema
     */
    public function cadastro()
    {
       
        $this->load->model('empresa');
        

        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Name', 'required|min_length[1]');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if(!$this->form_validation->run()) { 
            $this->load->view('empresas/cadastro'  );
        }
        else {
            $insert = $this->empresa->insert($this->input->post());


           if ($insert) {
               header("LOCATION: /empresas");
           }

        }

        
    }


    public function delete($id)
    {
        $this->load->helper('url');
        $this->load->model('empresa');

        if($this->empresa->delete($id)) {
            header("LOCATION: /empresas");
        }
        else {
            show_error('Erro ao excluir');
        }

        

    }
	
}
