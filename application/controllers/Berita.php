<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_berita');
    }
    public function index()
    {
        $this->user_login->cek_login();

        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Data Berita',
            'berita' => $this->m_berita->lists(),
            'isi' => 'admin/berita/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required', array('required' => ('%s harus di isi')));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_berita/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Tambah Data Berita',
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/berita/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'tgl_berita' => date('Y-m-d'),
                    'gambar' => $upload_data['uploads']['file_name']
                );

                $this->m_berita->add($data);
                $this->session->set_flashdata('pesan', 'Data Guru Berhasil Di Tambahkan !!');
                redirect('berita');
            }
        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Tambah Data Berita',
            'berita' => $this->m_berita->lists(),
            'isi' => 'admin/berita/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id)
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required', array('required' => ('%s harus di isi')));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_berita/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Edit Data Berita',
                    'error' => $this->upload->display_errors(),
                    'berita' => $this->m_berita->detail($id),
                    'isi' => 'admin/berita/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);


                $berita = $this->m_berita->detail($id);
                if ($berita->gambar) {
                    unlink('./foto_berita/' . $berita->gambar);
                }

                $data = array(
                    'id' => $id,
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $upload_data['uploads']['file_name']
                );

                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berita Berhasil Di Edit !!');
                redirect('berita');
            }
        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Edit Data Berita',
            'berita' => $this->m_berita->detail($id),
            'isi' => 'admin/berita/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id)
    {
        $berita = $this->m_berita->detail($id);
        if ($berita->gambar != "") {
            unlink("./foto_berita/" . $berita->gambar);
        }

        $data = array('id' => $id);
        $this->m_berita->delete($data);
        $this->session->set_flashdata('pesan', 'Berita Berhasil di Hapus');
        redirect('berita');
    }
}
