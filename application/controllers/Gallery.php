<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Gallery";

        $this->load->view('header', $data);
        $this->load->view('gallery');
        $this->load->view('footer');
    }
}
