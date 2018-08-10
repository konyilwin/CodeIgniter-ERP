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
        $this->data['pagetitle'] = 'Login';
        $this->render('auth/login', 'empty');
    }

    public function forgotPassword()
    {
        $this->data['pagetitle'] = 'Recover password';
        $this->render('auth/forgot_password', 'empty');
    }

    public function validateLogin()
    {
        $data = $this->input->post();
        $result = $this->db_getUserByLogin($data['username'], $data['password']);
        if (!$result) {
            echo json_encode($result);
        } else {
            unset($result->password);
            if ($result->active != 0) {
                $this->session->set_userdata('user', $result);
            }
            echo json_encode($result);
        }

    }

    protected function db_getUserByLogin($user, $pass){
        $where = "AES_DECRYPT(password,'xWxZz') = '$pass' AND (login = '$user' OR email = '$user')";
        //$where = array('AES_DECRYPT(password,\'xWxZz\')' => $pass);
        $query = $this->CRUD->read_where("users", $where);
        $result = (count($query) > 0) ? $query[0] : false;
        if($result) {
            $where = array('id_profile' => $result->id_profile);
            $rol = $this->CRUD->read_field_table("profile", 'user_profile', $where);
            $result->rol = $rol[0]->profile;
        }
        return $result;
    }

    public function loginOut()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function error_403(){
        $this->data['pagetitle'] = 'Error 403';
        $this->render('errors/html/error_403.php');
    }
}