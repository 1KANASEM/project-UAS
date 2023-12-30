<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function guru()
    {
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('bagian', 'bagian.id_bagian = guru.id_bagian', 'left');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function berita()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }

    public function detail_berita($id)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }

    public function gallery_kegiatan() {
        $this->db->select('gallery_kegiatan.*,count(kegiatan.id_gallery) as jml');  
        $this->db->from('gallery_kegiatan');
        $this->db->join('kegiatan', 'kegiatan.id_gallery = gallery_kegiatan.id_gallery', 'left');
        $this->db->group_by('gallery_kegiatan.id_gallery');
        $this->db->order_by('gallery_kegiatan.id_gallery', 'DESC');
        return $this->db->get()->result();
    }

    public function detail_kegiatan($id_gallery) {
        $this->db->select('gallery_kegiatan.id_gallery, gallery_kegiatan.nama, kegiatan.*');  
        $this->db->from('gallery_kegiatan');
        $this->db->where('gallery_kegiatan.id_gallery', $id_gallery);
        $this->db->join('kegiatan', 'kegiatan.id_gallery = gallery_kegiatan.id_gallery', 'left');
        $this->db->group_by('gallery_kegiatan.id_gallery');
        $this->db->order_by('gallery_kegiatan.nama', 'DESC');
        return $this->db->get()->result();
    }
    

    public function kegiatan($id_gallery) {
        $this->db->select('*');  
        $this->db->from('kegiatan');
        $this->db->where('id_gallery',$id_gallery);
        $this->db->order_by('id_kegiatan', 'DESC');
        return $this->db->get()->result();
    }

    public function gallery_fasilitas() {
        $this->db->select('gallery_fasilitas.*,count(fasilitas.id_gallery) as jml');  
        $this->db->from('gallery_fasilitas');
        $this->db->join('fasilitas', 'fasilitas.id_gallery = gallery_fasilitas.id_gallery', 'left');
        $this->db->group_by('gallery_fasilitas.id_gallery');
        $this->db->order_by('gallery_fasilitas.id_gallery', 'DESC');
        return $this->db->get()->result();
    }

    public function detail_fasilitas($id_gallery) {
        $this->db->select('gallery_fasilitas.id_gallery, gallery_fasilitas.nama, fasilitas.*');  
        $this->db->from('gallery_fasilitas');
        $this->db->where('gallery_fasilitas.id_gallery', $id_gallery);
        $this->db->join('fasilitas', 'fasilitas.id_gallery = gallery_fasilitas.id_gallery', 'left');
        $this->db->group_by('gallery_fasilitas.id_gallery');
        $this->db->order_by('gallery_fasilitas.nama', 'DESC');
        return $this->db->get()->result();
    }
    

    public function fasilitas($id_gallery) {
        $this->db->select('*');  
        $this->db->from('fasilitas');
        $this->db->where('id_gallery',$id_gallery);
        $this->db->order_by('id_fasilitas', 'DESC');
        return $this->db->get()->result();
    }
    

}
