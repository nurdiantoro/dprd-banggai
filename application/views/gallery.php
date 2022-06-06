<div id="gallery">
    <div class="container">
        <h1 class="warna-01 text-center">GALLERY</h1>
        <!-- <nav class="album">
            <h2 class="warna-01">ALBUM</h2>
            <ul>
                <li>
                    <a href="">Semua Album</a>
                </li>
                <li>
                    <a href="">Peresmian</a>
                </li>
                <li>
                    <a href="">Upacara Kegiatan</a>
                </li>
                <li>
                    <a href="">Rapat Kerja</a>
                </li>
                <li>
                    <a href="">Lainnya</a>
                </li>
            </ul>
        </nav> -->

        <div class="row mt-5 justify-content-center">
            <?php foreach ($gallerys as $gallery) { ?>
                <div class="col-md-3 mb-3">
                    <div class="card-gallery" id-gambar="<?= $gallery->file ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="background-wrapper" style="background-image: url('<?= base_url('assets/img/') . $gallery->file ?>') ;">
                        </div>
                        <div class="card-content">
                            <p class="judul">
                                <a href="#" class="card-tag">
                                    <i class="fa-solid fa-tag"></i> <?= $gallery->judul ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?= $this->pagination->create_links(); ?>

    </div>
</div>

<!----------------------------------MODAL------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" alt="" class="img-fluid modal-gambar">
            </div>
        </div>
    </div>
</div>

<script>
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var namaGambar = button.getAttribute('id-gambar')
        var modalTag = button.querySelector('.card-tag').innerHTML
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalGambar = exampleModal.querySelector('.modal-gambar')
        var modalJudul = exampleModal.querySelector('.modal-title')

        modalGambar.src = '<?= base_url() ?>assets/img/' + namaGambar
        modalJudul.innerHTML = modalTag
    })
</script>

<?php include 'section/e-aspirasi.php'; ?>