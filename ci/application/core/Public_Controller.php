<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Controller extends MY_Controller {

    public function __construct()
    {
        // Controller para rotas públicas onde não será aplicada verificação de autenticação
        parent::__construct();
    }
}
