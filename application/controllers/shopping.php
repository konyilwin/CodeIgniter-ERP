<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_shopping');
    }

    public function packages(){
        $this->render('shopping/packages','empty');
    }
}
