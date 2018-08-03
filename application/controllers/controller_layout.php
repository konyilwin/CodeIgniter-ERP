<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_layout extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->view('layout/header');
    }

    public function loadCss(){
        echo "tesing function loadCss";
    }
}
