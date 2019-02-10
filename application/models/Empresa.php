<?php

class Empresa extends CI_Model
{

    public $table = 'empresas';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($id)
    {
        $empresa = $this->db->get_where($this->table, ['id_empresa' => $id]);
        return $empresa->custom_row_object(0, 'Empresa');
    }

    public function getAll()
    {
        return $empresas = $this->db->get($this->table)->result();
    
    }

    public function getPaginate($per_page, $page)
    {
        return $this->db->get($this->table, $per_page, $page)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id_empresa' => $id]);
    }

    public function insert(array $data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update(array $data, $id)
    {
        return $this->db->update($this->table, $data, ['id_empresa' => $id]);
    }

    public function getTotal()
    {
        return $this->db->count_all($this->table);
    }

    /**
     * Valida o formulário de cadastro e atualização de novas empresas
     */
    public function validaForm()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Name', 'required|min_length[1]');
        $this->form_validation->set_rules('cnpj', 'CNPJ', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        return $this->form_validation->run();
    }

    /**
     * Mapeamento de empresas com colaboradores
     */
    public function colaboradores($id)
    {   
        $colaboradores = $this->db->query(" SELECT DISTINCT colaboradores.nome, colaboradores.id_colaborador FROM colaboradores INNER JOIN empresas ON $id = colaboradores.empresa_id");
        return $colaboradores->result();
        
    }

}

?>