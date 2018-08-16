<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function structure()
    {
        $this->data['module'][0] = 'Company';
        $this->data['module'][1] = 'Structure';
        $this->render('company/structure');

    }

}