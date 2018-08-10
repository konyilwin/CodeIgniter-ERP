<?php defined('BASEPATH') OR exit('No direct script access allowed');

class permission {

    protected $ci;
    protected $url;
    protected $routes;
    protected $method;
    protected $userData;

    function __construct() {
        $this->ci = &get_instance();
        $this->url = $this->ci->uri->uri_string();
        $this->routes = $this->ci->router->fetch_class();
        $this->method = $this->ci->router->fetch_method();
        $this->userData = $this->ci->session->userdata('user');
    }

    public function auth()
    {
        //Any route other than "auth" redirect to login
        if(($this->routes !== 'auth' && $this->url !== 'shopping/blog') && !$this->userData) {
            redirect(base_url().'auth/login');
        }

        //For access to method require $_POST varaible
        if($this->method == 'validateLogin' && !$this->ci->input->post()){
            redirect(base_url().'auth/login');
        }

        //Validate roles and routes | "FALTA INCLUIR LOS ROLES Y RUTAS EN <<UserData>>"
        if($this->userData){
            if ($this->url == '/') {
                redirect(base_url('dashboard/'), 'location');
            }

            if ($this->url == "public_pages/profile_user") {
                redirect(base_url() . 'auth/error_403');
            }
        }
    }
}
