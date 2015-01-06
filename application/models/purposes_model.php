<?php

class Purposes_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_purposes($id = false) {
        if ($id === FALSE) {
            $query = $this->db->get('purposes');
            return $query->result_array();
        }

        $query = $this->db->get_where('purposes', array('id' => $id));
        return $query->row_array();
    }

    public function set_purposes() {
        $this->load->helper('url');

        if ($this->input->post('parent') != '') {
            $parent = $this->input->post('parent');
        } else {
            $parent = null;
        }

        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'parent' => $parent
        );

        return $this->db->insert('purposes', $data);
    }

}
