<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gallery_kegiatan extends CI_Model {


    public function lists() {
        $this->db->select('gallery_kegiatan.*,count(kegiatan.id_gallery) as jml');  
        $this->db->from('gallery_kegiatan');
        $this->db->join('kegiatan', 'kegiatan.id_gallery = gallery_kegiatan.id_gallery', 'left');
        $this->db->group_by('gallery_kegiatan.id_gallery');
        $this->db->order_by('gallery_kegiatan.id_gallery', 'DESC');
        return $this->db->get()->result();
    }

    public function lists_kegiatan($id_gallery) {
        $this->db->select('*');  
        $this->db->from('kegiatan');
        $this->db->where('id_gallery',$id_gallery);
        $this->db->order_by('id_kegiatan', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_gallery) {
        $this->db->select('*');
        $this->db->from('gallery_kegiatan');
        $this->db->where('id_gallery', $id_gallery);
        return $this->db->get()->row();
    }

    public function detail_kegiatan($id_kegiatan) {
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->where('id_kegiatan', $id_kegiatan);
        return $this->db->get()->row();
    }


    public function add($data) {
        $this->db->insert('gallery_kegiatan', $data);
    }

    public function add_kegiatan($data) {
        $this->db->insert('kegiatan', $data);
    }

    public function edit($data) {
        $this->db->where('id_gallery', $data['id_gallery']);
        $this->db->update('gallery_kegiatan', $data);
    }

    public function delete($data) {
        $this->db->where('id_gallery', $data['id_gallery']);
        $this->db->delete('gallery_kegiatan', $data);
    }

    public function delete_kegiatan($data) {
        $this->db->where('id_kegiatan', $data['id_kegiatan']);
        $this->db->delete('kegiatan', $data);
    }
}
