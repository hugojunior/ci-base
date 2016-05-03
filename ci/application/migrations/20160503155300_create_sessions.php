<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_sessions extends CI_Migration {

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
            'created' => array(
                'type'           => 'DATETIME'
            ),
            'last_activity' => array(
                'type'           => 'DATETIME'
            ),
            'auth_code' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '40',
                'unique'         => TRUE
            ),
            'ip' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '15'
            ),
            'user_agent' => array(
                'type'           => 'TEXT'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('sessions');
    }

    public function down()
    {
        $this->dbforge->drop_table('sessions');
    }
}
