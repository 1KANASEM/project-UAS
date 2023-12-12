<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model {


    public function lists() {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function add($data) {
        $this->db->insert('admin', $data);
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('admin', $data);
}

public function delete($data) {
    $this->db->where('id', $data['id']);
    $this->db->delete('admin', $data);
}
}
