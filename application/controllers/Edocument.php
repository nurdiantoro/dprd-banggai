<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edocument extends CI_Controller
{

    public function index()
    {
        $data['edocumentpages'] = $this->model_edocument->readPage(1);
        $data['docs'] = $this->model_edocument->readAll();
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "e-Document";

        $this->load->view('header', $data);
        $this->load->view('eDocument', $data);
        $this->load->view('footer', $data);
    }
}
