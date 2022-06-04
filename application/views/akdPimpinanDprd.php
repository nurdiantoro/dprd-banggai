<?php foreach ($akdpages as $akdpage) {
} ?>

<div id="akd">
    <section id="akd-content">
        <div class="container">
            <h1 class="text-center warna-01 m-0">PIMPINAN DPRD</h1>
            <p class="text-center"><?= $akdpage->deskripsi_pimpinanDprd ?></p>
            <div class="row mt-5 d-flex justify-content-center">
                <?php foreach ($akdteams as $akdteam) { ?>
                    <div class="col-md-3">
                        <div class="card-akd">
                            <div class="card-akd-img">
                                <img src="<?= base_url('assets/img/akd/') . $akdteam->foto ?>" alt="">
                            </div>
                            <div class="card-akd-nama"><?= $akdteam->nama ?></div>
                            <div class="card-akd-jabatan"><?= $akdteam->jabatan ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php include 'section/akd-list.php'; ?>
</div>

<?php include 'section/agenda.php'; ?>
<?php include 'section/investigasi.php'; ?>
<?php include 'section/highlight-activity.php'; ?>
<?php include 'section/e-aspirasi.php'; ?>