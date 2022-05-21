<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Agenda";

        $this->load->view('header', $data);
        $this->load->view('agenda');
        $this->load->view('footer');
    }
}
