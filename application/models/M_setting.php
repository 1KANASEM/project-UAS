<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_setting extends CI_Model
{


    public function detail()
    {
        $this->db->select('*');
        $this->db->from('setting');
        $this->db->order_by('id', 1);
        return $this->db->get()->row();
    }

    public function save($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->Update('setting', $data);
    }
}
