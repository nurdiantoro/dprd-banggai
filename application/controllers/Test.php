<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

    public function index()
    {
        $data['title'] = "INI CUMA TEST";

        // $this->load->view('header', $data);
        // $this->load->view('test');
        // $this->load->view('footer');
        setlocale(LC_ALL, 'IND');
        echo strftime('%d %B %Y');
    }
}
