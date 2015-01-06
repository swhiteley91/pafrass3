<?php

class Patterns extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('patterns_model');
    }

    public function index() {
        $data['patterns'] = $this->patterns_model->get_patterns();
        $data['title'] = 'Patterns';

        $this->load->view('templates/header', $data);
        $this->load->view('patterns/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {
        $data['pattern_item'] = $this->patterns_model->get_patterns($id);
        if (empty($data['pattern_item'])) {
            show_404();
        }

        $data['title'] = $data['pattern_item']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('patterns/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add a new pattern';

        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('patterns/create');
            $this->load->view('templates/footer');
        } else {
            $this->patterns_model->set_patterns();
            $this->load->view('templates/header', $data);
            $this->load->view('patterns/success');
            $this->load->view('templates/footer');
        }
    }

}
