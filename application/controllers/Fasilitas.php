<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_gallery_fasilitas');
    }
    public function index()
    {
        $this->user_login->cek_login();

        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Data Gallery fasilitas',
            'gallery_fasilitas' => $this->m_gallery_fasilitas->lists(),
            'isi' => 'admin/gallery_fasilitas/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul_fasilitas/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Tambah Data Gallery fasilitas',
                    'error' => $this->upload->display_errors(),
                    'gallery_fasilitas' => $this->m_gallery_fasilitas->lists(),
                    'isi' => 'admin/gallery_fasilitas/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './sampul_fasilitas/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama' => $this->input->post('nama'),
                    'sampul' => $upload_data['uploads']['file_name']
                );

                $this->m_gallery_fasilitas->add($data);
                $this->session->set_flashdata('pesan', 'Data Gallery fasilitas Berhasil Di Tambahkan !!');
                redirect('fasilitas');
            }
        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Tambah Data Gallery fasilitas',
            'gallery_fasilitas' => $this->m_gallery_fasilitas->lists(),
            'isi' => 'admin/gallery_fasilitas/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_gallery)
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul_fasilitas/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Edit Data Gallery fasilitas',
                    'error' => $this->upload->display_errors(),
                    'gallery_fasilitas' => $this->m_gallery_fasilitas->detail($id_gallery),
                    'isi' => 'admin/gallery_fasilitas/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './sampul_fasilitas/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);


                $gallery_fasilitas = $this->m_gallery_fasilitas->detail($id_gallery);
                if ($gallery_fasilitas->sampul) {
                    unlink('./sampul_fasilitas/' . $gallery_fasilitas->sampul);
                }

                $data = array(
                    'id_gallery' => $id_gallery,
                    'nama' => $this->input->post('nama'),
                    'sampul' => $upload_data['uploads']['file_name']
                );

                $this->m_gallery_fasilitas->edit($data);
                $this->session->set_flashdata('pesan', 'Data gallery fasilitas Berhasil Di Edit !!');
                redirect('fasilitas');
            }

            $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './sampul_fasilitas/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_gallery' => $id_gallery,
                    'nama' => $this->input->post('nama'),
                );

                $this->m_gallery_fasilitas->edit($data);
                $this->session->set_flashdata('pesan', 'Data gallery fasilitas Berhasil Di Edit !!');
                redirect('fasilitas');

        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Edit Data Gallery fasilitas',
            'gallery_fasilitas' => $this->m_gallery_fasilitas->detail($id_gallery),
            'isi' => 'admin/gallery_fasilitas/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_gallery)
    {
        $gallery_fasilitas = $this->m_gallery_fasilitas->detail($id_gallery);
        if ($gallery_fasilitas->sampul != "") {
            unlink("./sampul_fasilitas/" . $gallery_fasilitas->sampul);
        }

        $data = array('id_gallery' => $id_gallery);
        $this->m_gallery_fasilitas->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
        redirect('fasilitas');
    }

    public function add_fasilitas($id_gallery)
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_fasilitas/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);


            $gallery_fasilitas = $this->m_gallery_fasilitas->detail($id_gallery);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Add Foto fasilitas ' . $gallery_fasilitas->nama,
                    'error' => $this->upload->display_errors(),
                    'gallery_fasilitas' => $gallery_fasilitas,
                    'fasilitas' => $this->m_gallery_fasilitas->lists_fasilitas($id_gallery),
                    'isi' => 'admin/gallery_fasilitas/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_fasilitas/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);


                $data = array(
                    'id_gallery' => $id_gallery,
                    'keterangan' => $this->input->post('keterangan'),
                    'foto' => $upload_data['uploads']['file_name']
                );
                $this->m_gallery_fasilitas->add_fasilitas($data);
                $this->session->set_flashdata('pesan','Data Berhasil Di Tambah');
                redirect('fasilitas/add_fasilitas/' .$id_gallery);

            }
            
        }

        $gallery_fasilitas = $this->m_gallery_fasilitas->detail($id_gallery);
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Add Foto fasilitas ' . $gallery_fasilitas->nama,
            'gallery_fasilitas' => $gallery_fasilitas,
            'fasilitas' => $this->m_gallery_fasilitas->lists_fasilitas($id_gallery),
            'isi' => 'admin/gallery_fasilitas/v_add_fasilitas'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete_fasilitas($id_gallery, $id_fasilitas)
    {
        $fasilitas = $this->m_gallery_fasilitas->detail_fasilitas($id_fasilitas);
        if ($fasilitas->foto != "") {
            unlink("./foto_fasilitas/" .$fasilitas->foto); 
        }

        $data = array('id_fasilitas' => $id_fasilitas);
        $this->m_gallery_fasilitas->delete_fasilitas($data);
        $this->session->set_flashdata('pesan', 'foto Berhasil di Hapus');
        redirect('fasilitas/add_fasilitas/' .$id_gallery);
    }
}