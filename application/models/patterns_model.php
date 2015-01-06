<?php

class Patterns_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_patterns($id = false) {
        if ($id === FALSE) {
            $query = $this->db->get('patterns');
            return $query->result_array();
        }

        $query = $this->db->get_where('patterns', array('id' => $id));
        return $query->row_array();
    }

    public function set_patterns() {
        $this->load->helper('url');

    //    $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'problem' => $this->input->post('problem'),
            'solution' => $this->input->post('solution'),
            'consequences' => $this->input->post('consequences'),
            'parentPurpose' => $this->input->post('parentpurpose'),
            'parentScope' => $this->input->post('parentscope')
        );

        return $this->db->insert('patterns', $data);
    }

}
