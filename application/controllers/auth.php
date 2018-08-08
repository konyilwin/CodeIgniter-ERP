<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        if ($this->session->userdata('user')) {
            redirect(base_url('dashboard/'));
        } else {
            $this->render('auth/login', 'empty');
        }
    }

    public function forgotPassword()
    {
        $this->render('auth/forgot_password', 'empty');
    }


    public function validateLogin(){
        if(!$data = $this->input->post()){
            redirect(base_url('/'));
        }else{
            $result = $this->getUserByLogin($data['username'],$data['password']);
            if (!$result) {
                echo json_encode($result);
            } else {
                unset($result->password);  //delete password for save result in $_SESSION
                if($result->active != 0){ $this->session->set_userdata('user', $result); }
                echo json_encode($result);
            }
        }
    }

    protected function getUserByLogin($user, $pass){
        $where = array('email' => $user, 'AES_DECRYPT(password,\'xWxZz\')' => $pass);
        $result = $this->CRUD->read_where("users", $where);
        return (count($result) > 0) ? $result[0] : false;
    }

    public function loginOut()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}


/*public function validateLogin()
    {
        if(!$data = $this->input->post()){
            redirect(base_url('/'));
        }else{
            $query2 = $this->model_auth->validar($data['username'], $data['password']);
            if ($query2) {
                $this->session->set_userdata('user', $query2[0]->nombre);
                echo json_encode($query2);
            } else {
                echo json_encode(false);
            }
        }
    }*/