<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_Controller extends Public_Controller {

    public function __construct()
    {
        // Controller para rotas com verificação de autenticação.
        parent::__construct();
    }
}
