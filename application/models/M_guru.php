<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guru extends CI_Model {


    public function lists() {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('bagian', 'bagian.id_bagian = guru.id_bagian', 'left');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id) {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('bagian', 'bagian.id_bagian = guru.id_bagian', 'left');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function add($data) {
        $this->db->insert('guru', $data);
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('guru', $data);
    }

    public function delete($data) {
        $this->db->where('id', $data['id']);
        $this->db->delete('guru', $data);
    }
}
