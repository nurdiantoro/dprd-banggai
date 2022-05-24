<div id="news">
    <div class="container">
        <h1 class="warna-01 text-center">BERITA UTAMA</h1>
        <div class="row mb-5">
            <div class="col-md-9">
                <a href="">
                    <div class="card-news card-news-lg">
                        <div class="background-wrapper" style="background-image: url('assets/img/image-1.png') ;">
                        </div>
                        <div class="card-content">
                            <span class="tanggal">19 Januari 2022</span>
                            <p class="judul">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem iste tempora quod cumque
                                saepe voluptatum unde recusandae dolorum animi aut, placeat aliquid quia illum impedit
                                obcaecati vitae hic accusamus ratione.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <div class="row h-100">
                    <div class="col-md-12 mb-4">
                        <a href="">
                            <div class="card-news card-news-sm">
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
                            <div class="card-news card-news-sm">
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

        <h2 class="warna-01">BERITA LAINNYA</h2>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <?php
                    $index = 0;
                    while ($index < 10) {
                        $index++;
                        echo ''
                    ?>
                        <div class="col-md-4 mb-3">
                            <div class="card-news card-news-sm">
                                <a href="">
                                    <div class="background-wrapper" href="" style="background-image: url('assets/img/image-1.png') ;">
                                    </div>
                                    <div class="card-content">
                                        <span class="tanggal">19 Januari 2022</span>
                                        <p class="judul">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        </p>
                                    </div>
                                </a>
                                <ul class="sharing-list">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-link"></i></i></a></li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-sidebar">
                    <div class="news-sidebar-title">
                        Berita Terbaru
                    </div>
                    <div class="news-sidebar-list">
                        <a class="news-sidebar-card" href="#">
                            <div class="news-sidebar-card-img">
                                <img class="img-fluid" src="<?= base_url() ?>assets/img/image-3.png" alt="">
                            </div>
                            <div class="news-sidebar-card-title">
                                <label class="warna-01">19 Januari 2021</label>
                                <label>
                                    Arus Balik Lebaran 2022: Hampir 2 Juta Kendaraan Diprediksi...
                                </label>
                            </div>
                        </a>
                        <a class="news-sidebar-card" href="#">
                            <div class="news-sidebar-card-img">
                                <img class="img-fluid" src="<?= base_url() ?>assets/img/image-3.png" alt="">
                            </div>
                            <div class="news-sidebar-card-title">
                                <label class="warna-01">19 Januari 2021</label>
                                <label>
                                    Arus Balik Lebaran 2022: Hampir 2 Juta Kendaraan Diprediksi...
                                </label>
                            </div>
                        </a>
                        <a class="news-sidebar-card" href="#">
                            <div class="news-sidebar-card-img">
                                <img class="img-fluid" src="<?= base_url() ?>assets/img/image-3.png" alt="">
                            </div>
                            <div class="news-sidebar-card-title">
                                <label class="warna-01">19 Januari 2021</label>
                                <label>
                                    Arus Balik Lebaran 2022: Hampir 2 Juta Kendaraan Diprediksi...
                                </label>
                            </div>
                        </a>
                        <a class="news-sidebar-card" href="#">
                            <div class="news-sidebar-card-img">
                                <img class="img-fluid" src="<?= base_url() ?>assets/img/image-3.png" alt="">
                            </div>
                            <div class="news-sidebar-card-title">
                                <label class="warna-01">19 Januari 2021</label>
                                <label>
                                    Arus Balik Lebaran 2022: Hampir 2 Juta Kendaraan Diprediksi...
                                </label>
                            </div>
                        </a>
                    </div>
                    <div class="news-sidebar-banner my-3">
                        <img src="<?= base_url() ?>assets/img/banner-01.png" class="img-fluid">
                    </div>
                    <div class="news-sidebar-title">
                        Youtube
                        <iframe src="https://www.youtube.com/embed/MM2Pk8vq9Lg" allowfullscreen class="img-fluid"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'section/agenda.php'; ?>
<?php include 'section/investigasi.php'; ?>
<?php include 'section/highlight-activity.php'; ?>
<?php include 'section/e-aspirasi.php'; ?>