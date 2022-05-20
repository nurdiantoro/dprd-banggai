<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edocument extends CI_Controller
{

    public function index()
    {
        $data['title'] = "e-Document";

        $this->load->view('header', $data);
        $this->load->view('eDocument');
        $this->load->view('footer');
    }
}
