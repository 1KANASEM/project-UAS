<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model {


    public function lists() {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

        public function detail($id) {
            $this->db->select('*');
            $this->db->from('berita');
            $this->db->where('id', $id);
            return $this->db->get()->row();
        }
    public function add($data) {
        $this->db->insert('berita', $data);
    }

    public function edit($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('berita', $data);
    }

    public function delete($data) {
        $this->db->where('id', $data['id']);
        $this->db->delete('berita', $data);
    }
}
