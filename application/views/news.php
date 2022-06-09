<?php
foreach ($newsPages as $newsPage) {
}
foreach ($newses1 as $news1) {
}
foreach ($newses2 as $news2) {
}
foreach ($newses3 as $news3) {
}
?>

<div id="news">
    <div class="container">
        <h1 class="warna-01 text-center">BERITA UTAMA</h1>
        <div class="row mb-5">
            <div class="col-md-9 mb-4">
                <a href="<?= base_url('news/detail/') . $news1->id ?>">
                    <div class="card-news card-news-lg">
                        <div class="background-wrapper" style="background-image: url('<?= base_url('assets/img/news/') . $news1->banner ?>') ;">
                        </div>
                        <div class="card-content">
                            <span class="tanggal"><?= date_format(new DateTime($news1->tanggal), 'd F Y'); ?></span>
                            <p class="judul"><?= $news1->judul ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <div class="row h-100">
                    <div class="col-md-12 col-6 mb-4">
                        <a href="<?= base_url('news/detail/') . $news2->id ?>">
                            <div class="card-news card-news-sm">
                                <div class="background-wrapper" style="background-image: url('<?= base_url('assets/img/news/') . $news2->banner ?>') ;">
                                </div>
                                <div class="card-content">
                                    <span class="tanggal"><?= date_format(new DateTime($news2->tanggal), 'd F Y'); ?></span>
                                    <p class="judul"><?= $news2->judul ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 col-6 mb-4">
                        <a href="<?= base_url('news/detail/') . $news3->id ?>">
                            <div class="card-news card-news-sm">
                                <div class="background-wrapper" style="background-image: url('<?= base_url('assets/img/news/') . $news3->banner ?>') ;">
                                </div>
                                <div class="card-content">
                                    <span class="tanggal"><?= date_format(new DateTime($news3->tanggal), 'd F Y'); ?></span>
                                    <p class="judul"><?= $news3->judul ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="warna-01">BERITA TERBARU</h2>
        <div class="row">
            <div class="col-md-9 col-12">
                <div class="row">
                    <?php foreach ($newses as $news) {
                    ?>
                        <div class="col-md-4 col-6 mb-3">
                            <div class="card-news card-news-sm">
                                <a href="<?= base_url('news/detail/') . $news->id ?>">
                                    <div class="background-wrapper" href="" style="background-image: url('<?= base_url('assets/img/news/') . $news->banner ?>') ;">
                                    </div>
                                    <div class="card-content">
                                        <span class="tanggal"><?= date_format(new DateTime($news->tanggal), 'd F Y'); ?></span>
                                        <p class="judul">
                                            <?= $news->judul ?>
                                        </p>
                                    </div>
                                </a>
                                <ul class="sharing-list">
                                    <li><a target="blank" href="https://www.facebook.com/sharer.php?u=<?= base_url('news/detail/') . $news->id ?>"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a target="blank" href="https://twitter.com/share?url=<?= base_url('news/detail/') . $news->id ?>&text=<?= $news->judul; ?>"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a target="blank" href="https://wa.me/?text=<?= base_url('news/detail/') . $news->id . ' ' . $news->judul; ?>"><i class="fa-brands fa-whatsapp"></i></i></a></li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="mb-5">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="news-sidebar">
                    <div class="news-sidebar-title">
                        Berita Lainnya
                    </div>
                    <div class="news-sidebar-list">
                        <?php foreach ($newsesLainnya as $newsLainnya) { ?>
                            <a class="news-sidebar-card" href="<?= base_url('news/detail/') . $newsLainnya->id ?>">
                                <div class="news-sidebar-card-img">
                                    <img class="img-fluid" src="<?= base_url() ?>assets/img/news/<?= $newsLainnya->banner ?>" alt="">
                                </div>
                                <div class="news-sidebar-card-title">
                                    <label class="warna-01"><?= date_format(new DateTime($newsLainnya->tanggal), 'd F Y'); ?></label>
                                    <label>
                                        <?= $newsLainnya->judul ?>
                                    </label>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="news-sidebar-banner my-3">
                        <img src="<?= base_url('assets/img/news/') . $newsPage->banner ?>" class="img-fluid">
                    </div>
                    <div class="news-sidebar-title">
                        Youtube
                        <iframe src="https://www.youtube.com/embed/<?= $newsPage->youtube ?>" allowfullscreen class=" img-fluid"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'section/agenda.php'; ?>
<?php //include 'section/investigasi.php'; 
?>
<?php include 'section/highlight-activity.php'; ?>
<?php include 'section/e-aspirasi.php'; ?>