<?php foreach ($agendapages as $agendapage) {
} ?>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Halaman Agenda</h6>
        <a href="<?= base_url('admin/agenda/tambah') ?>" class="btn btn-primary">Tambah Agenda</a>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editAgendaPage/1') ?>" method="post" enctype="multipart/form-data">
            <table class="" width="100%" cellspacing="0">
                <tr>
                    <td style="width: 20%;">Banner</td>
                    <td>:</td>
                    <td>
                        <input type="file" name="banner" class="form-control">
                        <input type="hidden" name="banner-lama" class="form-control" value="<?= $agendapage->banner ?>">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>
                        <textarea name="deskripsi" class="form-control" rows="5"><?= $agendapage->deskripsi ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Sidebar Banner</td>
                    <td>:</td>
                    <td>
                        <input type="file" name="sidebar_banner" class="form-control">
                        <input type="hidden" name="sidebar_banner-lama" class="form-control" value="<?= $agendapage->sidebar_banner ?>">
                    </td>
                </tr>
                <tr>
                    <td>Sidebar Youtube</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="youtube" class="form-control" value="<?= $agendapage->youtube ?>">
                        <small>contoh : https://www.youtube.com/watch?v=<span class="text-danger">MM2Pk8vq9Lg</span></small><br>
                        <small>cukup copy paste yang berwarna <span class="text-danger">merah</span> saja</small>
                    </td>
                </tr>
            </table>
            <div>
                <button type="submit" class="btn btn-primary d-block ml-auto">submit</button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Agenda</h6>
        <a href="<?= base_url('admin/agenda/tambah') ?>" class="btn btn-primary">Tambah Agenda</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul Kegiatan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($agendas as $agenda) { ?>
                        <tr>
                            <td><?= $agenda->judul ?></td>
                            <td>
                                <?= date_format(new DateTime($agenda->tanggal_mulai), 'd M Y'); ?>
                            </td>
                            <td>
                                <?= date_format(new DateTime($agenda->tanggal_selesai), 'd M Y'); ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin/agenda/') . $agenda->id ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" modal-id="<?= $agenda->id ?>" modal-judul="<?= $agenda->judul ?>">Delete</button>
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
                <p>Ingin mengapus agenda <strong class="judul text-primary">ini</strong></p>
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

        modalTitle.textContent = 'Hapus Agenda'
        modalJudul.textContent = judul
        buttonDelete.href = "<?= base_url('admin/hapusAgenda/') ?>" + id;
    })
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>