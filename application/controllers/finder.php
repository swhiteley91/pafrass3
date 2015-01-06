<?php

class Finder extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('purposes_model');
        $this->load->model('scopes_model');
        $this->load->model('patterns_model');
    }

    public function index() {
        $this->load->helper('form');        
        
        $data['purposes'] = $this->purposes_model->get_purposes();
        $data['scopes'] = $this->scopes_model->get_scopes();
        $data['title'] = 'Pattern finder';

        $this->load->view('templates/header', $data);
        $this->load->view('finder/index', $data);
        $this->load->view('templates/footer');
    }

}
