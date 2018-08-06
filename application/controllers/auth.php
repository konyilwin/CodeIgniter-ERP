<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_auth');
    }

    public function login(){
        $this->render('auth/login','empty');
    }

    public  function forgotPassword(){
        $this->render('auth/forgot_password','empty');
    }
    public function validateLogin()
    {
        $usuario = $this->input->post('username');
        $password = $this->input->post('password');


        $query2 = $this->model_auth->validar($usuario,$password);
        echo json_encode($query2);
        /*
                if ($this->session->userdata('codigo_usuario')) {
                    redirect(base_url('dashboard/inicio'));

                }else{

                }
        */
    }
}
