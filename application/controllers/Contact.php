<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['contacts'] = $this->model_contact->read(1);
        $data['title'] = "Contact";

        $this->load->view('header', $data);
        $this->load->view('contact', $data);
        $this->load->view('footer', $data);
    }
    public function tambah()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
        );
        $this->model_contactpesan->tambah($data);
        redirect(base_url('contact'));
    }
}
