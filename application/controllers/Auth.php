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
        //$this->render('auth/login', 'empty');
        $this->render('auth/login_full', 'empty');
    }

    public function forgotPassword()
    {
        $this->data['pagetitle'] = 'Recover password';
        $this->render('auth/forgot_password', 'empty');
    }

    public function validateLogin()
    {
        $data = $this->input->post();
        $result = $this->db_getDataUser($data['username'], $data['password']);
        if (!$result) {
            echo json_encode($result);
        } else {

            if ($result->active != 0) {
                $this->session->set_userdata('user', $result);
            }
            echo json_encode($result);
        }

    }

    protected function db_getDataUser($user, $pass){
        $where = "AES_DECRYPT(password,'xWxZz') = '$pass' AND (login = '$user' OR email = '$user')";
        $query = $this->CRUD->read_where("users", $where);
        $result = (count($query) > 0) ? $query[0] : false;
        if($result) {
            unset($result->password);
            $result->rol = $this->db_getRoles($result->id_roles);
            $result->routes = $this->db_getRoutes($result->id_roles);
        }
        return $result;
    }

    protected function db_getRoles($idProfile){
        $where = array('id_roles' => $idProfile);
        $query = $this->CRUD->read_field_table("roles", 'user_roles', $where);
        $result = (count($query) > 0) ? $query[0]->roles : false;
        return $result;
    }

    protected function db_getRoutes($idRol){
        $where = array('user_access.id_roles' => $idRol);
        $join  = array('user_access'=>'user_access.id_routes = user_routes.id_menu');
        $order = array('MenPosicion'=>'ASC');
        $query = $this->CRUD->read_join("user_routes",$join, $where,'*',$order);
        $result = (count($query) > 0) ? $query : false;
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