<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_gallery_kegiatan');
    }
    public function index()
    {
        $this->user_login->cek_login();

        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Data Gallery Kegiatan',
            'gallery_kegiatan' => $this->m_gallery_kegiatan->lists(),
            'isi' => 'admin/gallery_kegiatan/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul_kegiatan/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Tambah Data Gallery Kegiatan',
                    'error' => $this->upload->display_errors(),
                    'gallery_kegiatan' => $this->m_gallery_kegiatan->lists(),
                    'isi' => 'admin/gallery_kegiatan/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './sampul_kegiatan/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama' => $this->input->post('nama'),
                    'sampul' => $upload_data['uploads']['file_name']
                );

                $this->m_gallery_kegiatan->add($data);
                $this->session->set_flashdata('pesan', 'Data Gallery Kegiatan Berhasil Di Tambahkan !!');
                redirect('kegiatan');
            }
        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Tambah Data Gallery Kegiatan',
            'gallery_kegiatan' => $this->m_gallery_kegiatan->lists(),
            'isi' => 'admin/gallery_kegiatan/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id_gallery)
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './sampul_kegiatan/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('sampul')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Edit Data Gallery Kegiatan',
                    'error' => $this->upload->display_errors(),
                    'gallery_kegiatan' => $this->m_gallery_kegiatan->detail($id_gallery),
                    'isi' => 'admin/gallery_kegiatan/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './sampul_kegiatan/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);


                $gallery_kegiatan = $this->m_gallery_kegiatan->detail($id_gallery);
                if ($gallery_kegiatan->sampul) {
                    unlink('./sampul_kegiatan/' . $gallery_kegiatan->sampul);
                }

                $data = array(
                    'id_gallery' => $id_gallery,
                    'nama' => $this->input->post('nama'),
                    'sampul' => $upload_data['uploads']['file_name']
                );

                $this->m_gallery_kegiatan->edit($data);
                $this->session->set_flashdata('pesan', 'Data gallery kegiatan Berhasil Di Edit !!');
                redirect('kegiatan');
            }
            
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './sampul_kegiatan/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);


            $gallery_kegiatan = $this->m_gallery_kegiatan->detail($id_gallery);

            $data = array(
                'id_gallery' => $id_gallery,
                'nama' => $this->input->post('nama'),
            );

            $this->m_gallery_kegiatan->edit($data);
            $this->session->set_flashdata('pesan', 'Data gallery kegiatan Berhasil Di Edit !!');
            redirect('kegiatan');

        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Edit Data Gallery Kegiatan',
            'gallery_kegiatan' => $this->m_gallery_kegiatan->detail($id_gallery),
            'isi' => 'admin/gallery_kegiatan/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id_gallery)
    {
        $gallery_kegiatan = $this->m_gallery_kegiatan->detail($id_gallery);
        if ($gallery_kegiatan->sampul != "") {
            unlink("./sampul_kegiatan/" . $gallery_kegiatan->sampul);
        }

        $data = array('id_gallery' => $id_gallery);
        $this->m_gallery_kegiatan->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
        redirect('kegiatan');
    }

    public function add_kegiatan($id_gallery)
    {
        $this->user_login->cek_login();

        $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_kegiatan/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);


            $gallery_kegiatan = $this->m_gallery_kegiatan->detail($id_gallery);
            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Add Foto Kegiatan ' . $gallery_kegiatan->nama,
                    'error' => $this->upload->display_errors(),
                    'gallery_kegiatan' => $gallery_kegiatan,
                    'kegiatan' => $this->m_gallery_kegiatan->lists_kegiatan($id_gallery),
                    'isi' => 'admin/gallery_kegiatan/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_kegiatan/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);


                $data = array(
                    'id_gallery' => $id_gallery,
                    'keterangan' => $this->input->post('keterangan'),
                    'foto' => $upload_data['uploads']['file_name']
                );
                $this->m_gallery_kegiatan->add_kegiatan($data);
                $this->session->set_flashdata('pesan','Data Berhasil Di Tambah');
                redirect('kegiatan/add_kegiatan/' .$id_gallery);


            }
        }

        $gallery_kegiatan = $this->m_gallery_kegiatan->detail($id_gallery);
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Add Foto Kegiatan ' . $gallery_kegiatan->nama,
            'gallery_kegiatan' => $gallery_kegiatan,
            'kegiatan' => $this->m_gallery_kegiatan->lists_kegiatan($id_gallery),
            'isi' => 'admin/gallery_kegiatan/v_add_kegiatan'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete_kegiatan($id_gallery, $id_kegiatan)
    {
        $kegiatan = $this->m_gallery_kegiatan->detail_kegiatan($id_kegiatan);
        if ($kegiatan->foto != "") {
            unlink("./foto_kegiatan/" .$kegiatan->foto); 
        }

        $data = array('id_kegiatan' => $id_kegiatan);
        $this->m_gallery_kegiatan->delete_kegiatan($data);
        $this->session->set_flashdata('pesan', 'foto Berhasil di Hapus');
        redirect('kegiatan/add_kegiatan/' .$id_gallery);
    }
}