<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Public_Controller {

    public function __construct()
    {
        $this->load->library('authenticator');
    }

    public function index()
    {
        if($this->authenticator->loggedin())
        {
            $this->load->view('loggedin');
        } else
        {
            redirect('auth/login');
        }
    }

    public function login()
    {
        if($this->input->post())
        {
            var_dump($this->input->post());
        } else
        {
            $this->load->view('login_form');
        }
    }

    public function forgot($forgot_code = NULL)
    {
        if($forgot_code)
        {
            var_dump($this->input->post());
        } else
        {
            $this->load->view('forgot_form');
        }
    }

    public function activate($activate_code = NULL)
    {
        if($activate_code)
        {
            var_dump($this->input->post());
        } else
        {
            $this->load->view('activate_form');
        }
    }

    public function logout()
    {
        redirect('/');
    }
}
