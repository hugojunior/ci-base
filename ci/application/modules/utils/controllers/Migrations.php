<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrations extends Public_Controller {

    public function __construct()
    {
        $this->load->library('migration');
    }

	public function latest()
    {
        if(!$this->migration->latest())
        {
            show_error($this->migration->error_string());
        }
    }

    public function version($version = null)
	{
        if(!$this->migration->version($version))
        {
            show_error($this->migration->error_string());
        }
	}

}
