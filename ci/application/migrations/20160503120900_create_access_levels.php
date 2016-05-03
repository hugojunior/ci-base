<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_access_levels extends CI_Migration {

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
            'name' => array(
                'type'           => 'VARCHAR',
                'unique'         => TRUE,
                'constraint'     => '30'
            ),
            'enabled' => array(
                'type'           => 'BOOL',
                'default'        => '1'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('access_levels');
    }

    public function down()
    {
        $this->dbforge->drop_table('access_levels');
    }
}
