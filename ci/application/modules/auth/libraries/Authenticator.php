<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticator {

    protected $ci, $user;

    public function __construct()
    {
       $this->ci = &get_instance();
    }

    public function loggedin()
    {
        return $this->user;
    }

}
