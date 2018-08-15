<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Workspace extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    public function profile()
    {
            $this->data['pagetitle'] = 'Profile user';
            $this->data['module'][0] = 'WorkSpace';
            $this->data['module'][1] = 'profile';
            $this->render('workspace/profile');
    }
    public function mailBox()
    {
        $this->data['pagetitle'] = 'mailbox user';
        $this->data['module'][0] = 'WorkSpace';
        $this->data['module'][1] = 'MailBox';
        $this->render('workspace/mailbox');
    }
    public function contacts(){
        $this->data['pagetitle'] = 'mailbox user';
        $this->data['module'][0] = 'WorkSpace';
        $this->data['module'][1] = 'Contacts';
        $this->render('workspace/contacts');
    }
}