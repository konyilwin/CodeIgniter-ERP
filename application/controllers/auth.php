<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_auth');
    }


    public function index()
    {
        $this->render('auth/login','empty');
        $query2 = $this->model_auth->validar('jasp402@gmail.com','123123');
        echo json_encode($query2);
    }


}
