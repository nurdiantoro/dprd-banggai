<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

    public function index()
    {
        $data['abouts'] = $this->model_about->read(1);
        $data['contacts'] = $this->model_contact->read(1);
        $data['title'] = "Tentang DPRD Kabupaten Banggai Laut";

        $this->load->view('header', $data);
        $this->load->view('tentang', $data);
        $this->load->view('footer', $data);
    }
    public function tambah()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
        );
        $this->model_easpirasi->tambah($data);
        redirect(base_url('tentang'));
    }
}
