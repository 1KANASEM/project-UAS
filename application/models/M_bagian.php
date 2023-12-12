<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bagian extends CI_Model {


    public function lists() {
        $this->db->select('*');
        $this->db->from('bagian');
        $this->db->order_by('id_bagian', 'DESC');
        return $this->db->get()->result();
    }

    public function add($data) {
        $this->db->insert('bagian', $data);
    }

    public function edit($data) {
        $this->db->where('id_bagian', $data['id_bagian']);
        $this->db->update('bagian', $data);
}

public function delete($data) {
    $this->db->where('id_bagian', $data['id_bagian']);
    $this->db->delete('bagian', $data);
}
}
