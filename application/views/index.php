<?php
foreach ($homepages as $homepage) {
}
foreach ($newses1 as $news1) {
}
foreach ($newses2 as $news2) {
}
foreach ($newses3 as $news3) {
}
?>

<div id="home">
    <section class="header" style="background-image: url('<?= base_url('assets/img/') . $homepage->background ?>');">
        <div class="header-content">
            <h1 class="white-100"><?= $homepage->title_1 ?></h1>
            <h1 class="warna-01"><?= $homepage->title_2 ?></h1>
            <P class="white-100 "><?= $homepage->subtitle ?></P>
        </div>
    </section>
    <section id="berita-utama">
        <div class="container">
            <h1 class="warna-01 text-center">BERITA UTAMA</h1>
            <div class="row">
                <div class="col-md-9 berita1">
                    <a href="<?= base_url('news/detail/') . $news1->id ?>">
                        <div class="card-news card-news-lg">
                            <div class="background-wrapper" style="background-image: url('assets/img/news/<?= $news1->banner ?>') ;">
                            </div>
                            <div class="card-content">
                                <span class="tanggal"><?= $news1->tanggal ?></span>
                                <p class="judul"><?= $news1->judul ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="row h-100">
                        <div class="col-md-12 col-6 mb-4 berita2">
                            <a href="<?= base_url('news/detail/') . $news2->id ?>">
                                <div class="card-news card-news-sm">
                                    <div class="background-wrapper" style="background-image: url('assets/img/news/<?= $news2->banner ?>') ;">
                                    </div>
                                    <div class="card-content">
                                        <span class="tanggal"><?= $news2->tanggal ?></span>
                                        <p class="judul"><?= $news2->judul ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 col-6 berita3">
                            <a href="<?= base_url('news/detail/') . $news3->id ?>">
                                <div class="card-news card-news-sm">
                                    <div class="background-wrapper" style="background-image: url('assets/img/news/<?= $news3->banner ?>') ;">
                                    </div>
                                    <div class="card-content">
                                        <span class="tanggal"><?= $news3->tanggal ?></span>
                                        <p class="judul"><?= $news3->judul ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="<?= base_url('news') ?>" class="read-more">lihat semua berita</a>
            </div>
        </div>
    </section>

    <section id="banner">
        <div class="container">
            <img class="banner" src="<?= base_url('assets/img/') . $homepage->banner ?>" alt="banner">
        </div>
    </section>
</div>

<?php include 'section/agenda.php'; ?>
<?php include 'section/investigasi.php'; ?>
<?php include 'section/highlight-activity.php'; ?>
<?php include 'section/e-aspirasi.php'; ?>