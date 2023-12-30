<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Pagination
{
    public function generate_pagination_links($base_url, $total_rows, $per_page, $uri_segment = 3)
    {
        $CI = &get_instance();
        $CI->load->library('pagination');

        $config = array(
            'base_url' => $base_url,
            'total_rows' => $total_rows,
            'per_page' => $per_page,
            'uri_segment' => $uri_segment,
        );

        $CI->pagination->initialize($config);

        return $CI->pagination->create_links();
    }
}
