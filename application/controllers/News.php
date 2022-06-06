<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    public function index()
    {
        $data['newses1'] = $this->model_newspage->readNews(1, 'berita_utama1');
        $data['newses2'] = $this->model_newspage->readNews(1, 'berita_utama2');
        $data['newses3'] = $this->model_newspage->readNews(1, 'berita_utama3');
        $data['newsPages'] = $this->model_newspage->read(1);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['title'] = "News";

        // pagination`
        $this->load->library('pagination');
        $config['base_url'] = base_url('news/index');
        $config['total_rows'] = $this->model_news->readCount();
        $config['per_page'] = 9;
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul"></nav>';
        $config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = $config['num_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['newses'] = $this->model_news->readLimit($config['per_page'], $data['start']);

        $this->load->view('header', $data);
        $this->load->view('news', $data);
        $this->load->view('footer', $data);
    }

    public function detail($id)
    {
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['newses'] = $this->model_news->read($id);
        $data['contacts'] = $this->model_contact->read(1);
        $data['title'] = "News";

        $this->load->view('header', $data);
        $this->load->view('newsDetail', $data);
        $this->load->view('footer', $data);
    }
}
