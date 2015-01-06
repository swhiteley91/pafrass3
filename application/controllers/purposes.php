<?php

class Purposes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('purposes_model');
    }

    public function index() {
        $data['purposes'] = $this->purposes_model->get_purposes();
        $data['title'] = 'Purposes';

        $this->load->view('templates/header', $data);
        $this->load->view('purposes/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {
        $data['purpose_item'] = $this->purposes_model->get_purposes($id);
        if (empty($data['purpose_item'])) {
            show_404();
        }
        
        if ($data['purpose_item']['parent'] != null) {
            $data['parent'] = $this->purposes_model->get_purposes($data['purpose_item']['parent']);
        }        

        $data['title'] = $data['purpose_item']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('purposes/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Add a new pattern';
        $data['purposes'] = $this->purposes_model->get_purposes();        

        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('purposes/create');
            $this->load->view('templates/footer');
        } else {
            $this->purposes_model->set_purposes();
            $this->load->view('templates/header', $data);
            $this->load->view('purposes/success');
            $this->load->view('templates/footer');
        }
    }

}
