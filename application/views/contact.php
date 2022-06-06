<?php foreach ($contacts as $contact) {
} ?>
<div id="contact">
    <div class="container">
        <h1 class="warna-01 text-center">CONTACT</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-form">
                    <form action="<?= base_url('contact/tambah') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" placeholder="nama" name="nama">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" placeholder="email" name="email">
                            </div>
                            <div class="col-md-12">
                                <textarea name="pesan" placeholder="Pesan Kamu..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn-kirim">Kirim</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sidebar-contact">
                    <iframe src="<?= $contact->maps ?>" width="100%" height="200" style="border:0;"></iframe>
                    <table class="contact-list">
                        <tr>
                            <td><i class="fa-solid fa-location-dot"></i></td>
                            <td><a href=""><?= $contact->alamat ?></a></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-phone"></i></td>
                            <td><a href=""><?= $contact->telp ?></a></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-envelope"></i></td>
                            <td><a href=""><?= $contact->email ?></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>