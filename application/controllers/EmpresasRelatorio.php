<?php
set_time_limit(50);
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpresasRelatorio extends CI_Controller {


    public function index()
    {
        $this->load->database();

        $empresas = $this->db->get('empresas')->result();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->setDisplayMode('fullpage');
        $html = $this->load->view('empresas/relatorio', ['empresas' => $empresas], TRUE);
        $mpdf->SetFooter('{PAGENO}');
        $mpdf->writeHTML($html);
        $mpdf->SetProtection(array(), 'UserPassword', '');
        $filename = "Relatório das Empresas ". date("d/m/y - G:i:s").".pdf"; 
        $mpdf->Output($filename, "I"); 
    }

    
	
}
