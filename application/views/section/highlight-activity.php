<section id="highlight-activity">
    <div class="container">
        <h1 class="text-center warna-01">HIGHLIGHT ACTIVITY</h1>
        <div class="row">
            <?php foreach ($activities as $activity) { ?>
                <div class="col-md-3">
                    <div class="card-gallery" id-gambar="<?= $activity->file ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="background-wrapper" style="background-image: url('<?= base_url('assets/img/gallery/') . $activity->file ?>') ;">
                        </div>
                        <div class="card-content">
                            <p class="judul">
                                <a href="#" class="card-tag">
                                    <i class="fa-solid fa-tag"></i> <?= $activity->judul ?>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="<?= base_url('gallery') ?>" class="read-more">lihat semua gallery</a>
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

            modalGambar.src = '<?= base_url() ?>assets/img/' + namaGambar + '.png'
            modalJudul.innerHTML = modalTag
        })
    </script>

</section>