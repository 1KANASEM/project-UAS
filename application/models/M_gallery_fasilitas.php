<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gallery_fasilitas extends CI_Model {


    public function lists() {
        $this->db->select('gallery_fasilitas.*,count(fasilitas.id_gallery) as jml');  
        $this->db->from('gallery_fasilitas');
        $this->db->join('fasilitas', 'fasilitas.id_gallery = gallery_fasilitas.id_gallery', 'left');
        $this->db->group_by('gallery_fasilitas.id_gallery');
        $this->db->order_by('gallery_fasilitas.id_gallery', 'DESC');
        return $this->db->get()->result();
    }

    public function lists_fasilitas($id_gallery) {
        $this->db->select('*');  
        $this->db->from('fasilitas');
        $this->db->where('id_gallery',$id_gallery);
        $this->db->order_by('id_fasilitas', 'DESC');
        return $this->db->get()->result();
    }

    public function detail($id_gallery) {
        $this->db->select('*');
        $this->db->from('gallery_fasilitas');
        $this->db->where('id_gallery', $id_gallery);
        return $this->db->get()->row();
    }

    public function detail_fasilitas($id_fasilitas) {
        $this->db->select('*');
        $this->db->from('fasilitas');
        $this->db->where('id_fasilitas', $id_fasilitas);
        return $this->db->get()->row();
    }


    public function add($data) {
        $this->db->insert('gallery_fasilitas', $data);
    }

    public function add_fasilitas($data) {
        $this->db->insert('fasilitas', $data);
    }

    public function edit($data) {
        $this->db->where('id_gallery', $data['id_gallery']);
        $this->db->update('gallery_fasilitas', $data);
    }

    public function delete($data) {
        $this->db->where('id_gallery', $data['id_gallery']);
        $this->db->delete('gallery_fasilitas', $data);
        
    }

    public function delete_fasilitas($data) {
        $this->db->where('id_fasilitas', $data['id_fasilitas']);
        $this->db->delete('fasilitas', $data);
    }
}
