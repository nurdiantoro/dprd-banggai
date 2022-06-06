<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{

    public function index()
    {
        $data['agendaPages'] = $this->model_agenda->readPage(1);
        $data['agendaSidebars'] = $this->model_agenda->readLimit(4, 0);
        $data['contacts'] = $this->model_contact->read(1);
        $data['title'] = "Agenda";

        // pagination
        $jumlahDatabase = $this->model_agenda->readCount();
        $tampilPerHalaman = 3;
        $mulaiDari = $this->uri->segment(3);

        $this->load->library('pagination');
        $config['base_url'] = base_url('agenda/index');
        $config['total_rows'] = $jumlahDatabase;
        $config['per_page'] = $tampilPerHalaman;
        $config['full_tag_open'] = '<nav class="d-flex justify-content-center mt-5"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul"></nav>';
        $config['first_tag_open'] = $config['last_tag_open'] = $config['next_tag_open'] = $config['prev_tag_open'] = $config['num_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = $config['last_tag_close'] = $config['next_tag_close'] = $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['cur_tag_open'] = '<li class="page-item active" aria-current="page"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $this->pagination->initialize($config);

        $data['agendas'] = $this->model_agenda->readLimit($config['per_page'], $mulaiDari);


        $this->load->view('header', $data);
        $this->load->view('agenda', $data);
        $this->load->view('footer', $data);
    }
}
