<?php
foreach ($agendaPages as $agendaPage) {
} ?>
<div id="agenda">
    <div class="container">

        <section id="banner">
            <div class="container">
                <img class="banner" src="<?= base_url('assets/img/') . $agendaPage->banner ?>" alt="banner">
            </div>
        </section>

        <h1 class="text-center warna-01">AGENDA</h1>
        <p class="text-center"><?= $agendaPage->deskripsi ?></p>
        <div class="row">
            <div class="col-md-9">
                <?php foreach ($agendas as $agenda) { ?>
                    <div class="list-kegiatan">
                        <div class="title"><?= $agenda->judul ?></div>
                        <div class="tanggal"><?= date_format(new DateTime($agenda->tanggal_mulai), 'd F Y'); ?> - <?= date_format(new DateTime($agenda->tanggal_selesai), 'd F Y'); ?></div>
                        <p><?= $agenda->deskripsi ?></p>
                    </div>
                <?php } ?>
                <?= $this->pagination->create_links(); ?>

            </div>
            <div class="col-md-3">
                <div class="agenda-sidebar">
                    <div class="agenda-sidebar-title">
                        Agenda Terkini
                    </div>
                    <div class="agenda-sidebar-list">
                        <?php foreach ($agendaSidebars as $agendaSidebar) { ?>
                            <a class="agenda-sidebar-card" href="<?= base_url() ?>">
                                <div class="agenda-sidebar-card-title">
                                    <label class="warna-01"><?= $agendaSidebar->judul ?></label>
                                    <label><?= date_format(new DateTime($agendaSidebar->tanggal_mulai), 'd F Y'); ?></label>
                                    <label><?= $agendaSidebar->deskripsi ?></label>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="agenda-sidebar-banner my-3">
                        <img src="<?= base_url() ?>assets/img/<?= $agendaPage->sidebar_banner ?>" class="img-fluid">
                    </div>
                    <div class="agenda-sidebar-title">
                        Youtube
                        <iframe src="https://www.youtube.com/embed/<?= $agendaPage->youtube ?>" allowfullscreen class=" img-fluid"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'section/e-aspirasi.php'; ?>