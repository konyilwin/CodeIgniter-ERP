<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Drive extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['module'][0] = 'Drive';
        $this->data['module'][1] = 'File Manager';
        $this->render('drive/file-manager');

    }

}