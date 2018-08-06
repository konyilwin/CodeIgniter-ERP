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
            //$this->render('auth/login','empty');
        }
        //$this->data['pagetitle'] = 'test'; ...you can at any time change the variables declared in the MY_Controller...
        //$this->render('homepage_view');
        //$this->render(NULL, 'json'); ....if we want to render a json string. Also, if a request is made using ajax, we can simply do $this->render()
    }

}