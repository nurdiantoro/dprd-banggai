<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="icon" type="image/x-icon" href="<?= base_url('') ?>/assets/img/favicon.ico">

    <!-- CSS -->
    <link href="<?= base_url('') ?>assets/style.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

    <!-- JS -->
    <script src="<?= base_url('') ?>assets/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('') ?>assets/datatables/datatables.min.js"></script>

</head>

<body>
    <?php
    $home = $akd = $akd2 = $badanAnggaran = $pimpinanDprd = $badanMusyawarah = $bappeda = $komisi1 = $komisi2 = $komisi3 = $komisi4 = $news = $eDocument = $agenda = $gallery = $tentang = $contact = '';
    if (!$this->uri->segment(1)) {
        $home = 'active';
    } elseif ($this->uri->segment(1) == 'akd') {
        $akd = 'active';
        if (!$this->uri->segment(2)) {
            $akd2 = 'active';
        } elseif ($this->uri->segment(2) == 'badanAnggaran') {
            $badanAnggaran = 'active';
        } elseif ($this->uri->segment(2) == 'pimpinanDprd') {
            $pimpinanDprd = 'active';
        } elseif ($this->uri->segment(2) == 'badanMusyawarah') {
            $badanMusyawarah = 'active';
        } elseif ($this->uri->segment(2) == 'bappeda') {
            $bappeda = 'active';
        } elseif ($this->uri->segment(2) == 'komisi1') {
            $komisi1 = 'active';
        } elseif ($this->uri->segment(2) == 'komisi2') {
            $komisi2 = 'active';
        } elseif ($this->uri->segment(2) == 'komisi3') {
            $komisi3 = 'active';
        } elseif ($this->uri->segment(2) == 'komisi4') {
            $komisi4 = 'active';
        }
    } elseif ($this->uri->segment(1) == 'news') {
        $news = 'active';
    } elseif ($this->uri->segment(1) == 'eDocument') {
        $eDocument = 'active';
    } elseif ($this->uri->segment(1) == 'agenda') {
        $agenda = 'active';
    } elseif ($this->uri->segment(1) == 'gallery') {
        $gallery = 'active';
    } elseif ($this->uri->segment(1) == 'tentang') {
        $tentang = 'active';
    } elseif ($this->uri->segment(1) == 'contact') {
        $contact = 'active';
    }
    ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img height="32" src="<?= base_url('') ?>/assets/img/Logo-Kabupaten-Banggai-Laut.png" alt="logo-banggai-laut">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link <?= $home ?>" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= $akd ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">AKD</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item <?= $akd2 ?>" href="<?= base_url('') ?>akd">Alat Kelengkapan Dewan</a></li>
                            <li><a class="dropdown-item <?= $badanAnggaran ?>" href="<?= base_url('') ?>akd/badanAnggaran">Badan Anggaran</a></li>
                            <li><a class="dropdown-item <?= $pimpinanDprd ?>" href="<?= base_url('') ?>akd/pimpinanDprd">Pimpinan DPRD</a></li>
                            <li><a class="dropdown-item <?= $badanMusyawarah ?>" href="<?= base_url('') ?>akd/badanMusyawarah">Badan Musyawarah</a></li>
                            <li><a class="dropdown-item <?= $bappeda ?>" href="<?= base_url('') ?>akd/bappeda">BAPPEDA</a></li>
                            <li><a class="dropdown-item <?= $komisi1 ?>" href="<?= base_url('') ?>akd/komisi1">Komisi I</a></li>
                            <li><a class="dropdown-item <?= $komisi2 ?>" href="<?= base_url('') ?>akd/komisi2">Komisi II</a></li>
                            <li><a class="dropdown-item <?= $komisi3 ?>" href="<?= base_url('') ?>akd/komisi3">Komisi III</a></li>
                            <li><a class="dropdown-item <?= $komisi4 ?>" href="<?= base_url('') ?>akd/komisi4">Komisi IV</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link <?= $news ?>" href="<?= base_url('') ?>news">News</a></li>
                    <li class="nav-item"><a class="nav-link <?= $eDocument ?>" href="<?= base_url('') ?>eDocument">e-Document</a></li>
                    <li class="nav-item"><a class="nav-link <?= $agenda ?>" href="<?= base_url('') ?>agenda">Agenda</a></li>
                    <li class="nav-item"><a class="nav-link <?= $gallery ?>" href="<?= base_url('') ?>gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link <?= $tentang ?>" href="<?= base_url('') ?>tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link <?= $contact ?>" href="<?= base_url('') ?>contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>