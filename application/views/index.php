<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Resmi DPRD Banggai Laut</title>

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
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img height="32" src="<?= base_url('') ?>/assets/img/Logo-Kabupaten-Banggai-Laut.png" alt="logo-banggai-laut">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">AKD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">e-Document</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home">
        <section class="header">
            <div class="header-content text-center">
                <h1 class="white-100">SELAMAT DATANG DI</h1>
                <h1 class="warna-01">DPRD KABUPATEN BANGGAI LAUT</h1>
                <P class="white-100 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nibh imperdiet sollicitudin etiam sem. Elementum urna maecenas tellus risus sapien urna. Blandit pellentesque egestas tellus at luctus turpis nunc.</P>
            </div>
        </section>
        <section id="berita-utama">
            <div class="container">
                <h1 class="warna-01 text-center">BERITA UTAMA</h1>
                <div class="row">
                    <div class="col-md-9">
                        <a href="">
                            <div class="card">
                                <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                                </div>
                                <div class="card-content">
                                    <span class="tanggal">19 Januari 2022</span>
                                    <p class="judul">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem iste tempora quod cumque saepe voluptatum unde recusandae dolorum animi aut, placeat aliquid quia illum impedit obcaecati vitae hic accusamus ratione.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <div class="row h-100">
                            <div class="col-md-12 mb-4">
                                <a href="">
                                    <div class="card">
                                        <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                                        </div>
                                        <div class="card-content">
                                            <span class="tanggal">19 Januari 2022</span>
                                            <p class="judul">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <a href="">
                                    <div class="card">
                                        <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                                        </div>
                                        <div class="card-content">
                                            <span class="tanggal">19 Januari 2022</span>
                                            <p class="judul">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="" class="read-more">lihat semua berita</a>
                </div>
            </div>
        </section>

        <section id="banner">
            <div class="container">
                <img class="banner" src="<?= base_url() ?>/assets/img/image-2.png" alt="banner">
            </div>
        </section>

        <section id="agenda">
            <div class="container">
                <h1 class="warna-01 text-center">AGENDA</h1>
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid px-5" src="<?= base_url() ?>/assets/img/agenda.png" alt="agenda">
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <h2 class="warna-01">Nama Kegiatan</h2>
                                <p>16 Januari 2022</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus vel ipsum scelerisque eget senectus sed in at. At tristique tristique dignissim tellus sit ut rhoncus. Gravida lacus, eu posuere id nibh et placerat justo ullamcorper. Fermentum massa lacus ut a hendrerit. Morbi felis at viverra quis nibh facilisis mi amet, egestas. Molestie turpis neque metus convallis aliquet gravida natoque cursus eleifend.
                                </p>
                            </div>
                            <div class="item">
                                <h2 class="warna-01">Nama Kegiatan</h2>
                                <p>16 Januari 2022</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus vel ipsum scelerisque eget senectus sed in at. At tristique tristique dignissim tellus sit ut rhoncus. Gravida lacus, eu posuere id nibh et placerat justo ullamcorper. Fermentum massa lacus ut a hendrerit. Morbi felis at viverra quis nibh facilisis mi amet, egestas. Molestie turpis neque metus convallis aliquet gravida natoque cursus eleifend.
                                </p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="" class="read-more">lihat semua agenda</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="investigasi">
            <div class="container">
                <h1 class="text-center warna-01">INVESTIGASI</h1>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <a href="">
                            <div class="card">
                                <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                                </div>
                                <div class="card-content">
                                    <span class="tanggal">19 Januari 2022</span>
                                    <p class="judul">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="">
                            <div class="card">
                                <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                                </div>
                                <div class="card-content">
                                    <span class="tanggal">19 Januari 2022</span>
                                    <p class="judul">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="">
                            <div class="card">
                                <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                                </div>
                                <div class="card-content">
                                    <span class="tanggal">19 Januari 2022</span>
                                    <p class="judul">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="">
                            <div class="card">
                                <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                                </div>
                                <div class="card-content">
                                    <span class="tanggal">19 Januari 2022</span>
                                    <p class="judul">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="" class="read-more">lihat semua berita</a>
                </div>
            </div>
        </section>

        <section id="highlight-activity">
            <div class="container">
                <h1 class="text-center warna-01">HIGHLIGHT ACTIVITY</h1>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-gallery">
                            <div class="background-wrapper" style="background-image: url('assets/img/image-4.png') ;">
                            </div>
                            <div class="card-content">
                                <p class="judul">
                                    <a href="#">
                                        <i class="fa-solid fa-tag"></i> Upacara Kegiatan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-gallery">
                            <div class="background-wrapper" style="background-image: url('assets/img/image-5.png') ;">
                            </div>
                            <div class="card-content">
                                <p class="judul">
                                    <a href="#">
                                        <i class="fa-solid fa-tag"></i> Upacara Kegiatan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-gallery">
                            <div class="background-wrapper" style="background-image: url('assets/img/image-6.png') ;">
                            </div>
                            <div class="card-content">
                                <p class="judul">
                                    <a href="#">
                                        <i class="fa-solid fa-tag"></i> Upacara Kegiatan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-gallery">
                            <div class="background-wrapper" style="background-image: url('assets/img/image-7.png') ;">
                            </div>
                            <div class="card-content">
                                <p class="judul">
                                    <a href="#">
                                        <i class="fa-solid fa-tag"></i> Upacara Kegiatan
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="e-aspirasi">
            <div class="container text-center">
                <h2 class="text-center warna-01">KAMU PUNYA MASUKAN?</h2>
                <p>Masukan kamu akan sangat membantu. Silahkan klik tombol di bawah ini</p>
                <a href="#" class="btn-e-aspirasi">e-Aspirasi</a>
            </div>
        </section>

        <section id="footer">
            <div class="container">
                <h2 class="white-100">DPRD Kabupaten Banggai Laut</h2>
                <div class="row">
                    <div class="col-md-3">
                        <h5>Navigasi</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fraksi</a></li>
                            <li><a href="#">Berita</a></li>
                            <li><a href="#">Agenda</a></li>
                            <li><a href="#">Data & Statistik</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">Tentang</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: false,
            smartSpeed: 2000,
        })
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>