<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
   $this->data['module'][0] = 'Dashboard';
   $this->data['module'][1] = 'home';
   $this->render('dashboard/home');

    }

}