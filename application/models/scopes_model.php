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

        return $this->db->insert('scopes', $data);
    }

    public function get_scope_hierarchy($rows, $stripes, $id = null) {
        $query = $this->db->from("scopes")->where("parent", $id)->get();

        foreach ($query->result_array() as $row) {
            $row['stripe'] = $stripes;
            $rows[] = $row;
            $rows = $this->get_scope_hierarchy($rows, $stripes . "- ", $row['id']);
        }
        return $rows;
    }

}
