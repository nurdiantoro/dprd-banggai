<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['title'] = "homepage";

        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
}
