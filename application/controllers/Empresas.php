<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {


    public function index($page=1)
    {
        $empresas = [

            [
                'id' => '1',
                'name' => 'IMB',
                'cnpj' => '54.78.62-956',
                'email' => 'ibm@mail.com'
            ],
            [
                'id' => '2',
                'name' => 'Microsoft',
                'cnpj' => '32.41.65-985',
                'email' => 'microsoft@mail.com'
            ],
            [
                'id' => '3',
                'name' => 'Google',
                'cnpj' => '65.74.52-125',
                'email' => 'google@mail.com'
            ],
            [
                'id' => '4',
                'name' => 'Apple',
                'cnpj' => '65.74.85-956',
                'email' => 'apple@mail.com'
            ],
            [
                'id' => '5',
                'name' => 'Intel',
                'cnpj' => '52.41.59-986',
                'email' => 'intel@mail.com'
            ],
            [
                'id' => '6',
                'name' => 'Facebook',
                'cnpj' => '51.63.74-485',
                'email' => 'facebook@mail.com'
            ],
        
        ];

        $this->load->library('pagination');

        $this->pagination->initialize([
            'total_rows' => 6,
            'per_page' => 2,
            'base_url' => '/empresas/index',
            'first_link' => 'Primeiro',
            'last_link' => 'Último'
        ]);
        
        $this->load->view('empresas/index', [
            'empresas' => $empresas
        ]);
    }

    public function show($id)
    {
        echo "Retorna os dados da empresa de código ".$id;
    }

    public function cadastro()
    {

        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required|min_length[8]');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run() == false) { 
            $this->load->view('empresas/cadastro');
  
        }
        else {
           print_r( $this->input->post());

        }

        
    }


    public function destroy($id)
    {

    }
	
}
