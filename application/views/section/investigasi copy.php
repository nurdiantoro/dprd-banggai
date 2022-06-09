<section id="investigasi">
    <div class="container">
        <h1 class="text-center warna-01">INVESTIGASI</h1>
        <div class="row">
            <?php foreach ($newsesLainnya as $investigasi) { ?>
                <div class="col-md-3 col-6 mb-3">
                    <a href="<?= base_url('news/detail/') . $investigasi->id ?>">
                        <div class="card-news card-news-sm">
                            <div class="background-wrapper" style="background-image: url('<?= base_url('assets/img/news/') . $investigasi->banner ?>') ;">
                            </div>
                            <div class="card-content">
                                <span class="tanggal"><?= date_format(new DateTime($investigasi->tanggal), 'd F Y'); ?></span>
                                <p class="judul"><?= $investigasi->judul ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="text-center mt-3">
            <a href="<?= base_url('news') ?>" class="read-more">lihat semua berita</a>
        </div>
    </div>
</section>