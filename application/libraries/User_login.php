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

            redirect('berita');
        } else {
            // Pengecekan jika password kurang dari 8 karakter
            if (strlen($password) < 8) {
                $this->ci->session->set_flashdata('pesan', 'Maaf, password harus memiliki minimal 8 karakter');
                redirect('Login');
            } else {
                $this->ci->session->set_flashdata('pesan', 'Username atau password salah!!');
                redirect('Login');
            }
        }
    }



    public function cek_login()
    {
        if ($this->ci->session->userdata('username') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login!!');
            redirect('Login');
        }
    }

    public function cek_level()
    {
        if ($this->ci->session->userdata('level') == "2") {
            $this->ci->session->set_flashdata('pesan', 'level Anda bukan Admin!!');
            redirect('berita');
        }
    }


    public function logout()
    {
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama');
        $this->ci->session->unset_userdata('level');
        $this->ci->session->set_flashdata('logout', 'Logout succeess!!');
        redirect('Login');
    }
}

