<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Workspace extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function profile()
    {
        if (!$this->session->userdata('user')) {
            redirect(base_url('/'));
        } else {
            $this->data['pagetitle'] = 'Profile user';
            $this->data['activeMenu'] = 'profile';
            $this->render('workspace/profile');
        }

    }
}