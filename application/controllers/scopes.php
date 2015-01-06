<?php

class Scopes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('scopes_model');
    }

    public function index() {
        $data['scopes'] = $this->scopes_model->get_scopes();
        $data['title'] = 'Scopes';

        $this->load->view('templates/header', $data);
        $this->load->view('scopes/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {
        $data['scope_item'] = $this->scopes_model->get_scopes($id);

        if (empty($data['scope_item'])) {
            show_404();
        }
        
        if ($data['scope_item']['parent'] != null) {
            $data['parent'] = $this->scopes_model->get_scopes($data['scope_item']['parent']);
        }        

        $data['title'] = $data['scope_item']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('scopes/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add a new scope';
        $data['scopes'] = $this->scopes_model->get_scopes();


        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('scopes/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->scopes_model->set_scopes();
            $this->load->view('templates/header', $data);
            $this->load->view('scopes/success');
            $this->load->view('templates/footer');
        }
    }

}
