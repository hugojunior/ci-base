<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Insert_admin extends CI_Migration {

    public function up()
    {
        $this->db->insert('users', array(
            'id'               => 1,
            'name'             => 'Administrador',
            'login'            => 'admin',
            'email'            => 'contato@hugojunior.com',
            'password'         => password_hash('swordfish', PASSWORD_DEFAULT),
            'password_recover' => md5(uniqid()),
            'activation_code'  => md5(uniqid()),
            'activated'        => 1,
            'enabled'          => 1,
            'removed'          => 0
        ));

        $this->db->insert('access_levels', array(
            'id'               => 1,
            'name'             => 'Super Administrador',
            'enabled'          => 1
        ));

        $this->db->insert('user_levels', array(
            'id'               => 1,
            'id_user'          => 1,
            'id_level'         => 1
        ));
    }

    public function down()
    {
        $this->db->delete('user_levels', array('id' => 1));
        $this->db->delete('access_levels', array('id' => 1));
        $this->db->delete('users', array('id' => 1));
    }
}
