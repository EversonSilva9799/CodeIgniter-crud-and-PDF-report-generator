<?php

class Colaborador extends CI_Model
{

    protected $table = 'colaboradores';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    

    public function getAll($per_page, $page)
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
        $this->db->update($this->table, $data, ['id_colaborador' => $id]);
    }

    public function empresa($id)
    {
        $empresa = $this->db->query("SELECT DISTINCT empresas.nome, empresas.id_empresa FROM colaboradores INNER JOIN empresas ON $id = empresas.id_empresa LIMIT 1");
        return $empresa->result();
    }
}