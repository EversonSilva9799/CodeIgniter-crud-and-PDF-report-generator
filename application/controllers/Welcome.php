<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}

	public function migration()
	{
		$this->load->library('migration');

		if (!$this->migration->current()) {
			show_error($this->migration->error_string());
		}
	}

	
}
