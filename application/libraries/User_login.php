<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_login');
    }


    public function login($username, $password)
    {
        $cek = $this->ci->m_login->login($username, $password);
        if ($cek) {
            $username = $cek->username;
            $nama = $cek->nama;
            $level = $cek->level;
            //buat session
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('nama', $nama);
            $this->ci->session->set_userdata('level', $level);

            redirect('Admin');
        } else {
            $this->ci->session->set_flashdata('pesan', 'Username atau password salah!!');
            redirect('Login');
        }
    }

    
    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login!!');
            redirect('Login');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama');
        $this->ci->session->unset_userdata('level');
        $this->ci->session->set_flashdata('pesan', 'Logout succeess!!');
        redirect('Login');
    }
}

