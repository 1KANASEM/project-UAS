<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_admin');
    }
    public function index()
    {
        $this->user_login->cek_login();

        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Data Admin',
            'admin' => $this->m_admin->lists(),
            'isi' => 'admin/admin/v_admin'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),


        );
        $this->m_admin->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasi Di Tambah');
        redirect('admin');
    }

    public function edit($id)
    {
        $this->user_login->cek_login();
        $data = array(
            'id' => $id,
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),

        );
        $this->m_admin->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasi Di Edit');
        redirect('admin');
    }

    public function delete($id)
    {
        $this->user_login->cek_login();
        $data = array(
            'id' => $id,
        );
        $this->m_admin->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasi Di Hapus');
        redirect('admin');
    }
}

