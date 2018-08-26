<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function blog(){
        $this->render('shopping/blog','empty');
    }
}
