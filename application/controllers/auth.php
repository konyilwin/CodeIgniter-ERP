<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_auth');

    }
    public function login(){
        if ($this->session->userdata('user')) {
            redirect(base_url('dashboard/'));
        }else{
            //echo "test CRUD:".$this->model_auth->testCrud();
            $this->render('auth/login','empty');
        }

    }

    public  function forgotPassword(){
        $this->render('auth/forgot_password','empty');
    }

    public function validateLogin(){
        $data = $this->input->post();
        $query2 = $this->model_auth->validar($data['username'],$data['password']);
        if($query2){
            $this->session->set_userdata('user',$query2[0]->nombre);
            echo json_encode($query2);
        }else{
            echo json_encode(false);
        }
    }

    public function loginOut(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
