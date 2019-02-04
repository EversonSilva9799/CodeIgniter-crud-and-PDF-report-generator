<?php
class Migration_Create_Colaboradores extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id_colaborador' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'empresa_id' => [
                'type' => 'INT',
                'null' => TRUE
            ],
            'nome' => [
                'type' => 'varchar',
                'constraint' => '80'
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'cpf' => [
                'type' => 'varchar',
                'constraint' => '20'
            ],
            'sexo' => [
                'type' => 'char',
                'constraint' => '1'
            ],
            
        ]);
        $this->dbforge->add_key('id_colaborador', true);
        $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (empresa_id) REFERENCES empresas(id_empresa)');
        $this->dbforge->create_table('colaboradores', true);
    }

    public function down()
    {
        $this->dbforge->drop_table('colaboradores', true);
    }
}