<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $data = array();
    function __construct()
    {
        parent::__construct();
        $this->data['pagetitle'] = 'My CodeIgniter App';
    }

    protected function render($the_view = NULL, $template = 'master', $options = array())
    {
        if($template == 'json' || $this->input->is_ajax_request())
        {
            header('Content-Type: application/json');
            echo json_encode($this->data);
        }
        elseif(is_null($template))
        {
            $this->load->view($the_view,$this->data);
        }
        else
        {
            $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
            $this->load->view('templates/'.$template.'_view', $this->data);
        }
    }
}