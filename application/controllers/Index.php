<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function index()
    {
        $data['newses1'] = $this->model_newspage->readNews(1, 'berita_utama1');
        $data['newses2'] = $this->model_newspage->readNews(1, 'berita_utama2');
        $data['newses3'] = $this->model_newspage->readNews(1, 'berita_utama3');
        $data['homepages'] = $this->model_homepage->read(1);
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Website Resmi DPRD Kabupaten Banggai Laut";

        $this->load->view('header', $data);
        $this->load->view('index', $data);
        $this->load->view('footer', $data);
    }
}
