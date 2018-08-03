<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_layout extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function __index(){
        $this->load->view('url',$this->loadCss());
    }

    public function loadCss(){
        echo "tesing function loadCss";
    }
}
