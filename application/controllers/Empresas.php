<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {


    public function index()
    {
        
        $this->load->view('empresas/index');
    }

    public function show($id)
    {
        echo "Retorna os dados da empresa de código ".$id;
    }

    public function create()
    {

    }

    public function destroy($id)
    {

    }
	
}
