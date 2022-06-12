<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akd extends CI_Controller
{

    public function index()
    {
        $data['contacts'] = $this->model_contact->read(1);
        $data['title'] = "Alat Kelengkapan Dewan";
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['akdList'] = "";

        $this->load->view('header', $data);
        $this->load->view('akd', $data);
        $this->load->view('footer', $data);
    }

    public function badanAnggaran()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Badan Anggaran');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Badan Anggaran";
        $data['akdList'] = "badanAnggaran";

        $this->load->view('header', $data);
        $this->load->view('akdBadanAnggaran', $data);
        $this->load->view('footer', $data);
    }
    public function pimpinanDprd()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Pimpinan DPRD');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Pimpinan DPRD";
        $data['akdList'] = "pimpinanDprd";

        $this->load->view('header', $data);
        $this->load->view('akdPimpinanDprd', $data);
        $this->load->view('footer', $data);
    }

    public function badanMusyawarah()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Badan Musyawarah');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Badan Musyawarah";
        $data['akdList'] = "badanMusyawarah";

        $this->load->view('header', $data);
        $this->load->view('akdBadanMusyawarah', $data);
        $this->load->view('footer', $data);
    }

    public function bapemperda()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('BAPEMPERDA');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "BAPEMPERDA";
        $data['akdList'] = "bappeda";

        $this->load->view('header', $data);
        $this->load->view('akdBappeda', $data);
        $this->load->view('footer', $data);
    }

    public function komisi1()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi I');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Komisi I";
        $data['akdList'] = "komisi1";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi1', $data);
        $this->load->view('footer', $data);
    }

    public function komisi2()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi II');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Komisi II";
        $data['akdList'] = "komisi2";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi2', $data);
        $this->load->view('footer', $data);
    }

    public function komisi3()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi III');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Komisi III";
        $data['akdList'] = "komisi3";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi3', $data);
        $this->load->view('footer', $data);
    }

    public function komisi4()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi IV');
        $data['contacts'] = $this->model_contact->read(1);
        $data['agendas'] = $this->model_agenda->readLimit(4, 0);
        $data['newsesLainnya'] = $this->model_news->readRandom(4);
        $data['activities'] = $this->model_gallery->readLimit(4, 0);
        $data['title'] = "Komisi IV";
        $data['akdList'] = "komisi4";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi4', $data);
        $this->load->view('footer', $data);
    }
}
