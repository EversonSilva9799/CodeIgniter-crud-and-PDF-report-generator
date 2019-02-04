<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
        $this->load->database();
        $totalEmpresas = $this->db->count_all('empresas');
        
		$this->load->view('home', [
            'totalEmpresas' => $totalEmpresas
        ]);
    }
    
    public function migration()
	{
		$this->load->library('migration');

		if (!$this->migration->current()) {
			show_error($this->migration->error_string());
        }
        else {
            echo "Deu certo";
        }
	}
	
}
