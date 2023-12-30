<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_login');
        $this->load->model('m_setting');
    }


    public function index()
    {
        $this->user_login->cek_login();
        $this->user_login->cek_level();

        $this->form_validation->set_rules('nama_rtq', 'nama rtq', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('pimpinan', 'pimpinan', 'required');
        $this->form_validation->set_rules('visi', 'visi', 'required');
        $this->form_validation->set_rules('misi', 'misi', 'required');
        $this->form_validation->set_rules('sejarah', 'sejarah', 'required');
        $this->form_validation->set_rules('motto', 'motto', 'required');
        $this->form_validation->set_rules('no_hp', 'no hp', 'required');
        $this->form_validation->set_rules('program', 'program', 'required');
        $this->form_validation->set_rules('tujuan', 'tujuan', 'required');
        $this->form_validation->set_rules('muasofat', 'muasofat', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './foto_pimpinan/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_pimpinan')) {
                $data = array(
                    'title' => 'RTQ Al-Yusro',
                    'title2' => 'Setting Web RTQ',
                    'setting' => $this->m_setting->detail(),
                    'isi' => 'admin/admin/v_setting'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);


            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_pimpinan/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);



                $setting = $this->m_setting->detail(1);
                if ($setting->foto_pimpinan != "") {
                    unlink('./foto_pimpinan/' . $setting->foto_pimpinan);
                }

                $data = array(
                    'id' => '1',
                    'nama_rtq' => $this->input->post('nama_rtq'),
                    'alamat' => $this->input->post('alamat'),
                    'pimpinan' => $this->input->post('pimpinan'),
                    'sejarah' => $this->input->post('sejarah'),
                    'visi' => $this->input->post('visi'),
                    'misi' => $this->input->post('misi'),
                    'motto' => $this->input->post('motto'),
                    'program' => $this->input->post('program'),
                    'no_hp' => $this->input->post('no_hp'),
                    'tujuan' => $this->input->post('tujuan'),
                    'muasofat' => $this->input->post('muasofat'),
                    'foto_pimpinan' => $upload_data['uploads']['file_name']
                );
    
                $this->m_setting->save($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit !!');
                redirect('setting');
            }

            $data = array(
                'id' => '1',
                'nama_rtq' => $this->input->post('nama_rtq'),
                'alamat' => $this->input->post('alamat'),
                'pimpinan' => $this->input->post('pimpinan'),
                'sejarah' => $this->input->post('sejarah'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'motto' => $this->input->post('motto'),
                'program' => $this->input->post('program'),
                'no_hp' => $this->input->post('no_hp'),
                'tujuan' => $this->input->post('tujuan'),
                'muasofat' => $this->input->post('muasofat'),
            );

            $this->m_setting->save($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit !!');
            redirect('setting');

        }
        $data = array(
            'title' => 'RTQ Al-Yusro',
            'title2' => 'Setting Web RTQ',
            'setting' => $this->m_setting->detail(),
            'isi' => 'admin/admin/v_setting'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}

