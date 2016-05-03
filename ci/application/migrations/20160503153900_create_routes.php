<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_routes extends CI_Migration {

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
            'module' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ),
            'directory' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '30'
            ),
            'class' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ),
            'method' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '20'
            ),
            'public' => array(
                'type'           => 'BOOL',
                'default'        => '0'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('routes');
    }

    public function down()
    {
        $this->dbforge->drop_table('routes');
    }
}
