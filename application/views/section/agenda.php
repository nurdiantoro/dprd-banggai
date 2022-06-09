<section id="agenda-section">
    <div class="container">
        <h1 class="warna-01 text-center">AGENDA</h1>
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid px-5" src="<?= base_url() ?>/assets/img/agenda.png" alt="agenda">
            </div>
            <div class="col-md-8">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($agendas as $agenda) { ?>
                        <div class="item">
                            <h2 class="warna-01"><?= $agenda->judul ?></h2>
                            <p><?= date_format(new DateTime($agenda->tanggal_mulai), 'd F Y'); ?> - <?= date_format(new DateTime($agenda->tanggal_selesai), 'd F Y'); ?></p>
                            <p class="deskripsi"><?= $agenda->deskripsi ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="mt-3">
                    <a href="<?= base_url('agenda') ?>" class="read-more">lihat semua agenda</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: false,
        smartSpeed: 2000,
    })
</script>