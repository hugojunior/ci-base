<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_menu_itens extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unique'         => TRUE,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ),
            'id_menu' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            ),
            'id_route' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            ),
            'id_parent' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            ),
            'title' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            ),
            'enabled' => array(
                'type'           => 'BOOL',
                'default'        => '1'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('menu_itens');
    }

    public function down()
    {
        $this->dbforge->drop_table('menu_itens');
    }
}
