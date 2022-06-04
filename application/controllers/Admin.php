<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    //===================================READ===================================
    public function index()
    {
        $data['title'] = "Dashboard Website DPRD Kabupateng Banggai Laut";

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/dashboard');
        $this->load->view('backend/footer');
    }

    public function homepage()
    {
        $data['homepages'] = $this->model_homepage->read(1);
        $data['title'] = "Backend - Homepage";

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/homepage', $data);
        $this->load->view('backend/footer');
    }

    public function akd($id)
    {
        if ($id == "all") {
            $data['akdpages'] = $this->model_akdpage->read(1);
            $data['akdteams'] = $this->model_akdteam->readAll();
            $data['title'] = "Backend - akd";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/akd', $data);
            $this->load->view('backend/footer');
        } elseif ($id == "tambah") {
            $data['title'] = "Backend - Tambah Team";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/akdTambah', $data);
            $this->load->view('backend/footer');
        } else {
            $data['akdteams'] = $this->model_akdteam->read($id);
            $data['title'] = "Backend - Tambah Team";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/akdEdit', $data);
            $this->load->view('backend/footer');
        }
    }

    public function news($id)
    {
        if ($id == 'all') {
            $data['newsPages'] = $this->model_newspage->read(1);
            $data['newses'] = $this->model_news->readAll();
            $data['title'] = "Backend - news";
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/news', $data);
            $this->load->view('backend/footer');
        } elseif ($id == 'tambah') {
            $data['title'] = "Tambah News";
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/newsTambah');
            $this->load->view('backend/footer');
        } else {
            $data['newses'] = $this->model_news->read($id);
            $data['title'] = "";
            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/newsEdit', $data);
            $this->load->view('backend/footer');
        }
    }

    public function eDocument($id)
    {
        if ($id == 'all') {
            $data['docs'] = $this->model_edocument->readAll();
            $data['title'] = "Backend - eDocument";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/edocument', $data);
            $this->load->view('backend/footer');
        } elseif ($id == 'tambah') {
            $data['title'] = "Backend - Upload eDocument";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/edocumentTambah');
            $this->load->view('backend/footer');
        } else {
            $data['docs'] = $this->model_edocument->read($id);
            $data['title'] = "Backend - Edit eDocument";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/edocumentEdit', $data);
            $this->load->view('backend/footer');
        }
    }

    public function agenda($id)
    {
        if ($id == 'all') {
            $data['agendas'] = $this->model_agenda->readAll();
            $data['title'] = "Backend - agenda";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/agenda', $data);
            $this->load->view('backend/footer');
        } elseif ($id == 'tambah') {
            $data['title'] = "Backend - agenda";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/agendaTambah');
            $this->load->view('backend/footer');
        } else {
            $data['agendas'] = $this->model_agenda->read($id);
            $data['title'] = "Backend - agenda";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/agendaEdit', $data);
            $this->load->view('backend/footer');
        }
    }

    public function gallery($id)
    {
        if ($id == 'all') {
            $data['gallerys'] = $this->model_gallery->readAll();
            $data['title'] = "Backend - Gallery";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/gallery');
            $this->load->view('backend/footer');
        } elseif ($id == 'tambah') {
            $data['title'] = "Backend - Upload Image";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/galleryTambah');
            $this->load->view('backend/footer');
        } else {
            $data['gallerys'] = $this->model_gallery->read($id);
            $data['title'] = "Backend - Edit Gallery";

            $this->load->view('backend/header', $data);
            $this->load->view('backend/sidebar');
            $this->load->view('backend/galleryEdit', $data);
            $this->load->view('backend/footer');
        }
    }

    public function tentang()
    {
        $data['abouts'] = $this->model_about->read(1);
        $data['title'] = "Backend - tentang";

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/tentang', $data);
        $this->load->view('backend/footer');
    }

    public function contact()
    {
        $data['contacts'] = $this->model_contact->read(1);
        $data['messages'] = $this->model_contactpesan->readAll();
        $data['title'] = "Backend - contact";

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/contact', $data);
        $this->load->view('backend/footer');
    }
    public function eAspirasi()
    {
        $data['aspirasis'] = $this->model_easpirasi->readAll();
        $data['title'] = "Backend - e-Aspirasi";

        $this->load->view('backend/header', $data);
        $this->load->view('backend/sidebar');
        $this->load->view('backend/easpirasi', $data);
        $this->load->view('backend/footer');
    }

    //===================================CREATE===================================

    public function tambahNews()
    {
        // Fotonya di cek dulu, udah sesuai aturan atau belum
        // wajib konfigurasi sebelum panggil fungsi $this->upload
        $config['upload_path'] = './assets/img/news';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);

        // Foto di kirim ke folder sesuai aturan diatas
        if ($this->upload->do_upload('banner')) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'tanggal' => $this->input->post('tanggal'),
                'banner' => $this->upload->data('file_name'),
                'isi' => $this->input->post('isi'),
            );
            $this->model_news->tambah($data);
            redirect(base_url('admin/news/all'));
        } else {
            var_dump(array('error' => $this->upload->display_errors()));
        }
    }

    public function tambahEdocument()
    {
        // Fotonya di cek dulu, udah sesuai aturan atau belum
        // wajib konfigurasi sebelum panggil fungsi $this->upload
        $config['upload_path'] = './assets/e-document/';
        $config['allowed_types'] = 'pdf|doc|docx|xls';
        // $config['max_size'] = 2000;
        $this->load->library('upload', $config);

        // Foto di kirim ke folder sesuai aturan diatas
        if ($this->upload->do_upload('file')) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'tanggal' => date("Y-m-d", time()),
                'file' => $this->upload->data('file_name'),
            );
            $this->model_edocument->tambah($data);
            redirect(base_url('admin/edocument/all'));
        } else {
            var_dump(array('error' => $this->upload->display_errors()));
        }
    }

    public function tambahAgenda()
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal_mulai' => $this->input->post('tanggal-mulai'),
            'tanggal_selesai' => $this->input->post('tanggal-selesai'),
            'deskripsi' => $this->input->post('deskripsi'),
        );
        $this->model_agenda->tambah($data);
        redirect(base_url('admin/agenda/all'));
    }

    public function tambahGallery()
    {
        // Fotonya di cek dulu, udah sesuai aturan atau belum
        // wajib konfigurasi sebelum panggil fungsi $this->upload
        $config['upload_path'] = './assets/img/gallery';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);

        // Foto di kirim ke folder sesuai aturan diatas
        if ($this->upload->do_upload('file')) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'file' => $this->upload->data('file_name'),
            );
            $this->model_gallery->tambah($data);
            redirect(base_url('admin/gallery/all'));
        } else {
            var_dump(array('error' => $this->upload->display_errors()));
        }
    }

    public function tambahAkd()
    {
        // Fotonya di cek dulu, udah sesuai aturan atau belum
        // wajib konfigurasi sebelum panggil fungsi $this->upload
        $config['upload_path'] = './assets/img/akd';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);

        // Foto di kirim ke folder sesuai aturan diatas
        if ($this->upload->do_upload('foto')) {
            $data = array(
                'kategori' => $this->input->post('kategori'),
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'foto' => $this->upload->data('file_name'),
            );
            $this->model_akdteam->tambah($data);
            redirect(base_url('admin/akd/all'));
        } else {
            var_dump(array('error' => $this->upload->display_errors()));
        }
    }

    //===================================UPDATE===================================

    public function editHomepage($id)
    {
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('banner')) {
            // $error = array('error' => $this->upload->display_errors());
            // var_dump($error);
            // die;
        }
        // Cek image diubah atau engga
        // Kalau engga, tetep pakai yang lama
        if ($this->upload->data('file_name') == null) {
            $banner = $this->input->post('banner-lama');
        } else {
            $banner = $this->upload->data('file_name');
        }

        $data = array(
            'title_1' => $this->input->post('title-1'),
            'title_2' => $this->input->post('title-2'),
            'subtitle' => $this->input->post('subtitle'),
            'banner' => $banner,
        );

        $this->model_homepage->edit($id, $data);
        redirect(base_url('admin/homepage'));
    }

    public function editNews($id)
    {
        $config['upload_path'] = './assets/img/news';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('banner')) {
            // $error = array('error' => $this->upload->display_errors());
            // var_dump($error);
            // die;
        }
        // Cek image diubah atau engga
        // Kalau engga, tetep pakai yang lama
        if ($this->upload->data('file_name') == null) {
            $banner = $this->input->post('banner-lama');
        } else {
            $banner = $this->upload->data('file_name');
        }

        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal' => $this->input->post('tanggal'),
            'isi' => $this->input->post('isi'),
            'banner' => $banner,
        );

        $this->model_news->edit($id, $data);
        redirect(base_url('admin/news/all'));
    }
    public function editNewsPage($id)
    {
        $config['upload_path'] = './assets/img/news';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('banner')) {
            // $error = array('error' => $this->upload->display_errors());
            // var_dump($error);
            // die;
        }
        // Cek image diubah atau engga
        // Kalau engga, tetep pakai yang lama
        if ($this->upload->data('file_name') == null) {
            $banner = $this->input->post('banner-lama');
        } else {
            $banner = $this->upload->data('file_name');
        }

        $data = array(
            'banner' => $banner,
            'youtube' => $this->input->post('youtube'),
            'berita_utama1' => $this->input->post('berita_utama1'),
            'berita_utama2' => $this->input->post('berita_utama2'),
            'berita_utama3' => $this->input->post('berita_utama3'),
        );

        $this->model_newspage->edit($id, $data);
        redirect(base_url('admin/news/all'));
    }

    public function editEdocument($id)
    {
        $data = array(
            'judul' => $this->input->post('judul')
        );

        $this->model_edocument->edit($id, $data);
        redirect(base_url('admin/edocument/all'));
    }

    public function editAgenda($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal_mulai' => $this->input->post('tanggal-mulai'),
            'tanggal_selesai' => $this->input->post('tanggal-selesai'),
            'deskripsi' => $this->input->post('deskripsi'),
        );

        $this->model_agenda->edit($id, $data);
        redirect(base_url('admin/agenda/all'));
    }

    public function editGallery($id)
    {
        $data = array(
            'judul' => $this->input->post('judul'),
        );

        $this->model_gallery->edit($id, $data);
        redirect(base_url('admin/gallery/all'));
    }

    public function editTentang($id)
    {
        $data = array(
            'tentang' => $this->input->post('tentang'),
            'visi' => $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
        );

        $this->model_about->edit($id, $data);
        redirect(base_url('admin/tentang'));
    }

    public function editAkdpage($id)
    {
        $config['upload_path'] = './assets/img';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('banner')) {
            $banner = $this->input->post('banner-lama');
        } else {
            $banner = $this->upload->data('file_name');
        }


        if (!$this->upload->do_upload('image')) {
            $image = $this->input->post('image-lama');
        } else {
            $image = $this->upload->data('file_name');
        }

        $data = array(
            'banner' => $banner,
            'deskripsi' => $this->input->post('deskripsi'),
            'image' => $image,
        );

        $this->model_akdpage->edit($id, $data);
        redirect(base_url('admin/akd/all'));
    }
    public function editAkddeskripsi($id)
    {

        $data = array(
            'deskripsi_badanAnggaran' => $this->input->post('deskripsi_badanAnggaran'),
            'deskripsi_pimpinanDprd' => $this->input->post('deskripsi_pimpinanDprd'),
            'deskripsi_badanMusyawarah' => $this->input->post('deskripsi_badanMusyawarah'),
            'deskripsi_bappeda' => $this->input->post('deskripsi_bappeda'),
            'deskripsi_komisi1' => $this->input->post('deskripsi_komisi1'),
            'deskripsi_komisi2' => $this->input->post('deskripsi_komisi2'),
            'deskripsi_komisi3' => $this->input->post('deskripsi_komisi3'),
            'deskripsi_komisi4' => $this->input->post('deskripsi_komisi4'),
        );

        $this->model_akdpage->edit($id, $data);
        redirect(base_url('admin/akd/all'));
    }
    public function editAkd($id)
    {
        $config['upload_path'] = './assets/img/akd';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('foto')) {
            $foto = $this->input->post('foto-lama');
        } else {
            $foto = $this->upload->data('file_name');
        }

        $data = array(
            'kategori' => $this->input->post('kategori'),
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'foto' => $foto,
        );

        $this->model_akdteam->edit($id, $data);
        redirect(base_url('admin/akd/all'));
    }
    public function editContact($id)
    {
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
            'fax' => $this->input->post('fax'),
            'email' => $this->input->post('email'),
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'youtube' => $this->input->post('youtube'),
            'instagram' => $this->input->post('instagram'),
        );

        $this->model_contact->edit($id, $data);
        redirect(base_url('admin/contact'));
    }

    //===================================DELETE===================================

    public function hapusNews($id)
    {
        $this->model_news->hapus($id);
        redirect(base_url('admin/news/all'));
    }
    public function hapusEdocument($id)
    {
        $this->model_edocument->hapus($id);
        redirect(base_url('admin/edocument/all'));
    }
    public function hapusAgenda($id)
    {
        $this->model_agenda->hapus($id);
        redirect(base_url('admin/agenda/all'));
    }
    public function hapusGallery($id)
    {
        $this->model_gallery->hapus($id);
        redirect(base_url('admin/gallery/all'));
    }
    public function hapusAkd($id)
    {
        $this->model_akdteam->hapus($id);
        redirect(base_url('admin/akd/all'));
    }
}
