<?php foreach ($contacts as $footer) {
} ?>

<section id="footer">
    <div class="container">
        <h2 class="white-100 mb-5">DPRD Kabupaten Banggai Laut</h2>
        <div class="footer-navigasi">
            <div class="list-navigasi footer-navbar">
                <h5>Navigasi</h5>
                <ul>
                    <li><a href="<?= base_url('') ?>">Home</a></li>
                    <li><a href="<?= base_url('news') ?>">News</a></li>
                    <li><a href="<?= base_url('eDocument') ?>">e-Document</a></li>
                    <li><a href="<?= base_url('agenda') ?>">Agenda</a></li>
                    <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                    <li><a href="<?= base_url('tentang') ?>">Tentang</a></li>
                </ul>
            </div>
            <div class="list-navigasi footer-akd">
                <h5>AKD</h5>
                <ul>
                    <li><a href="<?= base_url('akd/badanAnggaran') ?>">Badan Anggaran</a></li>
                    <li><a href="<?= base_url('akd/pimpinanDprd') ?>">Pimpinan DPRD</a></li>
                    <li><a href="<?= base_url('akd/badanMusyawarah') ?>">Badan Musyawarah</a></li>
                    <li><a href="<?= base_url('akd/bapemperda') ?>">BAPEMPERDA</a></li>
                    <li><a href="<?= base_url('akd/komisi1') ?>">Komisi I</a></li>
                    <li><a href="<?= base_url('akd/komisi2') ?>">Komisi II</a></li>
                    <li><a href="<?= base_url('akd/komisi3') ?>">Komisi III</a></li>
                    <li><a href="<?= base_url('akd/komisi4') ?>">Komisi IV</a></li>
                </ul>
            </div>
            <div class="list-navigasi footer-alamat">
                <h5>Alamat</h5>
                <ul>
                    <li><a><?= $footer->alamat ?></a></li>
                </ul>
            </div>
            <div class="list-navigasi footer-kontak">
                <h5>Kontak</h5>
                <ul>
                    <li><a href="tel:<?= $footer->telp ?>"><?= $footer->telp ?> - Kantor</a></li>
                    <li><a href=""><?= $footer->fax ?> - Fax</a></li>
                    <li><a href="mailto:<?= $footer->email ?>"><?= $footer->email ?></a></li>
                </ul>
            </div>
            <div class="list-navigasi footer-socialmedia">
                <h5>Sosial Media</h5>
                <ul class="social-media">
                    <li><a href="<?= $footer->facebook ?>" target="Blank"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="<?= $footer->twitter ?>" target="Blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="<?= $footer->youtube ?>" target="Blank"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="<?= $footer->instagram ?>" target="Blank"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
</body>

</html>