<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
        $this->load->model(['empresa', 'colaborador']);

        $totalEmpresas = $this->empresa->getTotal();
        $totalColaboradores= $this->colaborador->getTotal();
        
		$this->load->view('home', [
            'totalEmpresas' => $totalEmpresas,
            'totalColaboradores' => $totalColaboradores
        ]);
    }
    
    // public function migration()
	// {
	// 	$this->load->library('migration');

	// 	if (!$this->migration->current()) {
	// 		show_error($this->migration->error_string());
    //     }
	// }
	
}
