<?php

class Finder extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('purposes_model');
        $this->load->model('scopes_model');
        $this->load->model('patterns_model');
    }

    public function index() {
        $data['purposes'] = $this->patterns_model->get_patterns();
          $data['title'] = 'Patterns';

        $this->load->view('templates/header');
        $this->load->view('finder/index');
        $this->load->view('templates/footer');
    }

}
