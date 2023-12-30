<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bagian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_bagian');
    }
    public function index() {
        $this->user_login->cek_login();
        $this->user_login->cek_level();

        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Data Departemen',
            'bagian' => $this->m_bagian->lists(),
            'isi' => 'admin/bagian/v_bagian'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add() {
        $this->user_login->cek_login();
        $this->user_login->cek_level();
        $data = array(
            'bagian' => $this->input->post('bagian'),
        );
        $this->m_bagian->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasi Di Tambah');
        redirect('bagian');
    }

    public function edit($id_bagian) {
        $this->user_login->cek_login();
        $this->user_login->cek_level();
        $data = array(
            'id_bagian' => $id_bagian,
            'bagian' => $this->input->post('bagian')
        );
        $this->m_bagian->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasi Di Edit');
        redirect('bagian');
    }

    public function delete($id_bagian) {
        $this->user_login->cek_login();
        $this->user_login->cek_level();
        $data = array(
            'id_bagian' => $id_bagian,
        );
        $this->m_bagian->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasi Di Hapus');
        redirect('bagian');
    }
}


