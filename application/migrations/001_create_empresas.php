<?php
class Migration_Create_Empresas extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id_empresa' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'varchar',
                'constraint' => '80'
            ],
            'cnpj' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => '50'
            ],
            
        ]);
        $this->dbforge->add_key('id_empresa', true);
        $this->dbforge->create_table('empresas', true);
    }

    public function down()
    {
        $this->dbforge->drop_table('empresas', true);
    }
}