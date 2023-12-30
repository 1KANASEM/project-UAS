<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('m_guru');
        $this->load->model('m_home');
        $this->load->model('m_berita');
        $this->load->model('m_setting');
        $this->load->library('my_pagination');
    }

    public function index()
    {
        $data = array(
            'title' => 'Web Sekolah',
            'berita' => $this->m_home->berita(),
            'gallery_kegiatan' => $this->m_home->gallery_kegiatan(),
            'isi' => 'v_home'
        );
        $this->load->view('beranda/v_wrapper', $data, FALSE);
    }

    public function guru()
    {
        $data = array(
            'title' => 'Guru',
            'guru' => $this->m_home->guru(),
            'isi' => 'v_guru'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function berita()
    {
        $data = array(
            'title' => 'Berita',
            'berita' => $this->m_home->berita(),
            'isi' => 'v_berita'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function detail_berita($id)
    {
        $data = array(
            'title' => 'Detail Berita',
            'berita' => $this->m_home->berita(),
            'detail_berita' => $this->m_home->detail_berita($id),
            'isi' => 'v_detail_berita'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function gallery_kegiatan()
    {
        $data = array(
            'title' => 'Gallery Kegiatan',
            'gallery_kegiatan' => $this->m_home->gallery_kegiatan(),
            'isi' => 'v_gallery_kegiatan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function kegiatan($id_gallery)
    {
        $data = array(
            'title' => 'Gallery Kegiatan',
            'detail_kegiatan' => $this->m_home->detail_kegiatan($id_gallery),
            'kegiatan' => $this->m_home->kegiatan($id_gallery),
            'isi' => 'v_kegiatan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function gallery_fasilitas()
    {
        $data = array(
            'title' => 'Gallery Fasilitas',
            'gallery_fasilitas' => $this->m_home->gallery_fasilitas(),
            'isi' => 'v_gallery_fasilitas'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function fasilitas($id_gallery)
    {
        $data = array(
            'title' => 'Gallery Fasilitas',
            'detail_fasilitas' => $this->m_home->detail_fasilitas($id_gallery),
            'fasilitas' => $this->m_home->fasilitas($id_gallery),
            'isi' => 'v_fasilitas'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


    public function about()
    {
        $data = array(
            'title' => 'Kontak Kami',
            'isi' => 'v_about',
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function profil()
    {
        $data = array(
            'title' => 'Profile RTQ',
            'setting' => $this->m_setting->detail(),
            'isi' => 'v_profil',
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}


