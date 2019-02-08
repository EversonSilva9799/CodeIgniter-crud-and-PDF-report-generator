<?php

class Colaborador extends CI_Model
{

    protected $table = 'colaboradores';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    

    public function getAll()
    {
      return $this->db->get($this->table)->result();
    }

    public function getPaginate($per_page, $page)
    {
        return $this->db->get($this->table, $per_page, $page)->result();
    }

    public function get($id)
    {
        $colaborador = $this->db->get_where($this->table, ['id_colaborador' => $id]);
        return $colaborador->custom_row_object(0, 'Colaborador');
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id_colaborador' => $id]);
    }

    public function insert(array $data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update(array $data, $id)
    {
        return $this->db->update($this->table, $data, ['id_colaborador' => $id]);
    }

    public function validaForm()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[50]|min_length[4]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[50]|min_length[4]');
        $this->form_validation->set_rules('cpf', 'CPF', 'trim|required|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('sexo', 'Sexo', 'trim|required|alpha|min_length[1]|max_length[1]');
       // $this->form_validation->set_rules('empresa_id', 'Empresa');

       return $this->form_validation->run();
    }

    public function empresa($empresa_id)
    {
        $empresa = $this->db->query("SELECT DISTINCT empresas.nome, empresas.id_empresa FROM colaboradores INNER JOIN empresas ON $empresa_id = empresas.id_empresa LIMIT 1");
        return $empresa->result();
    }
}