<?php foreach ($abouts as $about) {
} ?>

<div id="tentang">
    <section class="container">
        <h1 class="warna-01 text-center m-0">TENTANG</h1>
        <h2 class="text-center">DPRD KABUPATEN BANGGAI LAUT</h2>

        <div class="row mt-5">
            <div class="col-md-8">
                <p><?= $about->tentang ?></p>
            </div>
            <div class="col-md-4">
                <img src="<?= base_url() ?>assets/img/Kabupaten-Banggai-Laut.png" alt="" class="img-fluid p-5">
            </div>
        </div>
    </section>
    <section id="visi-misi">
        <div class="container">
            <div class="visi-misi">
                <div class="visi">
                    <h2 class="text-center warna-01">VISI</h2>
                    <p class="text-center"><?= $about->visi ?></p>
                </div>
                <div class="misi">
                    <h2 class="text-center warna-01">MISI</h2>
                    <p class="text-center"><?= $about->misi ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="e-aspirasi">
        <div class="container">
            <h2 class="warna-01 text-center mb-3">E-ASPIRASI</h2>
            <p class="text-center">Kami senang bisa mendengar aspirasi dari kamu. Isi email dengan benar agar kami bisa membalas pesan kamu.</p>
            <div class="form-aspirasi">
                <form action="<?= base_url('tentang/tambah/') ?>" method="post">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" placeholder="nama" name="nama">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" placeholder="email" name="email">
                        </div>
                        <div class="col-md-12">
                            <textarea rows="3" placeholder="Pesan Kamu..." name="pesan"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-kirim">Kirim</button>
                </form>
            </div>
        </div>
    </section>
</div>