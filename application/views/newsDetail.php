<?php foreach ($newses as $news) {
} ?>
<div id="news-detail">
    <div class="container">
        <h1 class="warna-01"><?= $news->judul ?></h1>
        <p><?= date_format(new DateTime($news->tanggal), 'd F Y'); ?></p>
        <img src="<?= base_url('assets/img/news/') . $news->banner ?>" alt="<?= $news->banner ?>" class="img-fluid">
        <p style="text-align: justify;"><?= $news->isi ?></p>
    </div>
</div>

<?php include 'section/investigasi.php'; ?>