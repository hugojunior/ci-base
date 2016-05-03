<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_activities extends CI_Migration {

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
            'date' => array(
                'type'           => 'DATETIME'
            ),
            'identifier' => array(
                'type'           => 'VARCHAR',
                'constraint'     => '50'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('activities');
    }

    public function down()
    {
        $this->dbforge->drop_table('activities');
    }
}
