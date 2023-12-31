<?php foreach ($edocumentpages as $edocumentpage) {
} ?>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Halaman e-Document</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="<?= base_url('admin/editEdocumentPage/1') ?>" method="POST">
                <table class="" width="100%" cellspacing="0">
                    <tr>
                        <td style="width: 20%;">Deskripsi</td>
                        <td>: </td>
                        <td>
                            <textarea name="deskripsi" rows="10" class="form-control"><?= $edocumentpage->deskripsi ?></textarea>
                            <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                        </td>
                    </tr>
                </table>
                <div>
                    <button type="submit" class="btn btn-primary ml-auto d-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data e-Document</h6>
        <a href="<?= base_url('admin/edocument/tambah') ?>" class="btn btn-primary">Upload e-Document</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Dokumen</th>
                        <th>Tanggal Upload</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($docs as $doc) { ?>
                        <tr>
                            <td><?= $doc->judul ?></td>
                            <td><?= $doc->tanggal ?></td>
                            <td>
                                <form method="get" action="<?= base_url('assets/e-document/') . $doc->file ?>">
                                    <a href="<?= base_url('admin/edocument/') . $doc->id ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="<?= base_url('assets/e-document/') ?>" download="<?= $doc->file ?>" class="btn btn-sm btn-primary">download</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" modal-id="<?= $doc->id ?>" modal-judul="<?= $doc->judul ?>">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!----------------------------------MODAL------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus News</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <p>Ingin mengapus dokumen <strong class="judul text-primary">ini</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-danger btn-delete" href="">Hapus</a>
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
        var id = button.getAttribute('modal-id')
        var judul = button.getAttribute('modal-judul')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalJudul = exampleModal.querySelector('.judul')
        var buttonDelete = exampleModal.querySelector('.btn-delete')

        modalTitle.textContent = 'Hapus Dokumen'
        modalJudul.textContent = judul
        buttonDelete.href = "<?= base_url('admin/hapusEdocument/') ?>" + id;
    })
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>