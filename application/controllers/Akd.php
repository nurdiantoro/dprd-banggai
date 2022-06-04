<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akd extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Alat Kelengkapan Dewan";
        $data['akdList'] = "";

        $this->load->view('header', $data);
        $this->load->view('akd');
        $this->load->view('footer');
    }

    public function badanAnggaran()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Badan Anggaran');
        $data['title'] = "Badan Anggaran";
        $data['akdList'] = "badanAnggaran";

        $this->load->view('header', $data);
        $this->load->view('akdBadanAnggaran', $data);
        $this->load->view('footer');
    }
    public function pimpinanDprd()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Pimpinan DPRD');
        $data['title'] = "Pimpinan DPRD";
        $data['akdList'] = "pimpinanDprd";

        $this->load->view('header', $data);
        $this->load->view('akdPimpinanDprd', $data);
        $this->load->view('footer');
    }

    public function badanMusyawarah()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Badan Musyawarah');
        $data['title'] = "Badan Musyawarah";
        $data['akdList'] = "badanMusyawarah";

        $this->load->view('header', $data);
        $this->load->view('akdBadanMusyawarah', $data);
        $this->load->view('footer');
    }

    public function bappeda()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('BAPPEDA');
        $data['title'] = "BAPPEDA";
        $data['akdList'] = "bappeda";

        $this->load->view('header', $data);
        $this->load->view('akdBappeda', $data);
        $this->load->view('footer');
    }

    public function komisi1()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi I');
        $data['title'] = "Komisi I";
        $data['akdList'] = "komisi1";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi1', $data);
        $this->load->view('footer');
    }

    public function komisi2()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi II');
        $data['title'] = "Komisi II";
        $data['akdList'] = "komisi2";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi2', $data);
        $this->load->view('footer');
    }

    public function komisi3()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi III');
        $data['title'] = "Komisi III";
        $data['akdList'] = "komisi3";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi3', $data);
        $this->load->view('footer');
    }

    public function komisi4()
    {
        $data['akdpages'] = $this->model_akdpage->read(1);
        $data['akdteams'] = $this->model_akdteam->readKategori('Komisi IV');
        $data['title'] = "Komisi IV";
        $data['akdList'] = "komisi4";

        $this->load->view('header', $data);
        $this->load->view('akdKomisi4', $data);
        $this->load->view('footer');
    }
}
