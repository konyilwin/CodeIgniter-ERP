<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Public_pages extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function profile_user()
    {
        if (!$this->session->userdata('user')) {
            redirect(base_url('/'));
        } else {
            $this->data['pagetitle'] = 'Profile user';
            $this->render('public/profile_user');
        }

    }
}