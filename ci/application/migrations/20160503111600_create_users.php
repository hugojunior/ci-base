<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration {

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
                'constraint'     => '60'
            ),
            'login' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '15',
                'unique'         => TRUE
            ),
            'email' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '60',
                'unique'         => TRUE
            ),
            'password' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ),
            'password_recover' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '32'
            ),
            'activation_code' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '32'
            ),
            'activated' => array(
                'type'           => 'BOOL',
                'default'        => '0'
            ),
            'enabled' => array(
                'type'           => 'BOOL',
                'default'        => '1'
            ),
            'removed' => array(
                'type'           => 'BOOL',
                'default'        => '0'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
