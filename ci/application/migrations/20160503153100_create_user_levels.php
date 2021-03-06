<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_user_levels extends CI_Migration {

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
            'id_user' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            ),
            'id_level' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_levels');
    }

    public function down()
    {
        $this->dbforge->drop_table('user_levels');
    }
}
