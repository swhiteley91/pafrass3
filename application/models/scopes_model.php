<?php

class Scopes_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_scopes($id = false) {
        if ($id === FALSE) {
            $query = $this->db->get('scopes');
            return $query->result_array();
        }

        $query = $this->db->get_where('scopes', array('id' => $id));
        return $query->row_array();
    }

    public function set_scopes() {
        $this->load->helper('url');

    //    $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description')
        );

        return $this->db->insert('scopes', $data);
    }

}
