<?php foreach ($newses as $news) {
} ?>
<div id="news-detail">
    <div class="container">
        <h1 class="warna-01"><?= $news->judul ?></h1>
        <p><?= date_format(new DateTime($news->tanggal), 'd F Y'); ?></p>
        <img src="<?= base_url('assets/img/news/') . $news->banner ?>" alt="<?= $news->banner ?>" class="img-fluid mb-3">
        <ul class="sharing-list">
            <li>Share</li>
            <li><a target="blank" href="https://www.facebook.com/sharer.php?u=<?= base_url('news/detail/') . $news->id ?>"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a target="blank" href="https://twitter.com/share?url=<?= base_url('news/detail/') . $news->id ?>&text=<?= $news->judul; ?>"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a target="blank" href="https://wa.me/?text=<?= base_url('news/detail/') . $news->id . ' ' . $news->judul; ?>"><i class="fa-brands fa-whatsapp"></i></i></a></li>
        </ul>
        <p class="mt-3" style="text-align: justify;"><?= $news->isi ?></p>
    </div>
</div>

<?php include 'section/investigasi.php'; ?>