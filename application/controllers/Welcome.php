<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if ($this->session->userdata('user')) {
            redirect(base_url('dashboard/'));
        }else{
           redirect(base_url('/auth/login'), 'location');
        }
    }

}