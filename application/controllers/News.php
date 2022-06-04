<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function index()
    {
        $data['newsPages'] = $this->model_newspage->read(1);
        $data['newsesLainnya'] = $this->model_news->readLimit(4);
        $data['newses'] = $this->model_news->readAll();
        $data['title'] = "News";

        $this->load->view('header', $data);
        $this->load->view('news', $data);
        $this->load->view('footer');
    }

    public function detail($id)
    {

        $data['newses'] = $this->model_news->read($id);
        $data['title'] = "News";

        $this->load->view('header', $data);
        $this->load->view('newsDetail', $data);
        $this->load->view('footer');
    }
}
