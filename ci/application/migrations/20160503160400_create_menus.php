<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_menus extends CI_Migration {

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
            'title' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ),
            'enabled' => array(
                'type'           => 'BOOL',
                'default'        => '1'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('menus');
    }

    public function down()
    {
        $this->dbforge->drop_table('menus');
    }
}
