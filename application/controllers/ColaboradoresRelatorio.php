<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ColaboradoresRelatorio extends CI_Controller {


    public function index()
    {
        $this->load->database();

        $colaboradores = $this->db->get_where('colaboradores', ['sexo' => "F"])->result();
    
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->setDisplayMode('fullpage');
        $html = $this->load->view('colaboradores/relatorio', ['colaboradores' => $colaboradores], TRUE);
        $mpdf->SetFooter('{PAGENO}');
        $mpdf->writeHTML($html);
        $mpdf->SetProtection(array(), 'UserPassword', '');
        $filename = "Relatório dos Colaboradores ". date("d/m/y - G:i:s").".pdf"; 
        $mpdf->Output($filename, "I"); 
    }

   
	
}
