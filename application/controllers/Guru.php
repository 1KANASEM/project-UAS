<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_guru');
        $this->load->model('m_bagian');
    }
    public function index()
    {
        $this->user_login->cek_login();
        $this->user_login->cek_level();

        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Data Guru',
            'guru' => $this->m_guru->lists(),
            'isi' => 'admin/guru/v_list'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();
        $this->user_login->cek_level();

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('id_bagian', 'departement', 'required');
        $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_guru/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Tambah Data Guru',
                    'error' => $this->upload->display_errors(),
                    'bagian' => $this->m_bagian->lists(),
                    'isi' => 'admin/guru/v_add'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_guru/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'gender' => $this->input->post('gender'),
                    'id_bagian' => $this->input->post('id_bagian'),
                    'pendidikan' => $this->input->post('pendidikan'),
                    'foto' => $upload_data['uploads']['file_name']
                );

                $this->m_guru->add($data);
                $this->session->set_flashdata('pesan', 'Data Guru Berhasil Di Tambahkan !!');
                redirect('guru');
            }
        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Tambah Data Guru',
            'bagian' => $this->m_bagian->lists(),
            'isi' => 'admin/guru/v_add'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit($id)
    {
        $this->user_login->cek_login();
        $this->user_login->cek_level();

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('id_bagian', 'departement', 'required');
        $this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_guru/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Edit Data Guru',
                    'error' => $this->upload->display_errors(),
                    'guru' => $this->m_guru->detail($id),
                    'bagian' => $this->m_bagian->lists(),
                    'isi' => 'admin/guru/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);

            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_guru/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);


                $guru = $this->m_guru->detail($id);
                if ($guru->foto) {
                    unlink('./foto_guru/' . $guru->foto);
                }

                $data = array(
                    'id' => $id,
                    'nama' => $this->input->post('nama'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'gender' => $this->input->post('gender'),
                    'id_bagian' => $this->input->post('id_bagian'),
                    'pendidikan' => $this->input->post('pendidikan'),
                    'foto' => $upload_data['uploads']['file_name']
                );

                $this->m_guru->edit($data);
                $this->session->set_flashdata('pesan', 'Data Guru Berhasil Di Edit !!');
                redirect('guru');
            }
            
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_guru/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);


            $guru = $this->m_guru->detail($id);

            $data = array(
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'gender' => $this->input->post('gender'),
                'id_bagian' => $this->input->post('id_bagian'),
                'pendidikan' => $this->input->post('pendidikan'),
            );

            $this->m_guru->edit($data);
            $this->session->set_flashdata('pesan', 'Data Guru Berhasil Di Edit !!');
            redirect('guru');
        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Edit Data Guru',
            'guru' => $this->m_guru->detail($id),
            'bagian' => $this->m_bagian->lists(),
            'isi' => 'admin/guru/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete($id)
    {
        $guru = $this->m_guru->detail($id);
        if ($guru->foto != "") {
            unlink("./foto_guru/" . $guru->foto);
        }

        $data = array('id' => $id);
        $this->m_guru->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
        redirect('guru');
    }
}
