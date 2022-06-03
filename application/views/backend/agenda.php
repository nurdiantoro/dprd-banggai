<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Agenda</h6>
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

        modalTitle.textContent = 'Hapus Dokumen'
        modalJudul.textContent = judul
        buttonDelete.href = "<?= base_url('admin/hapusAgenda/') ?>" + id;
    })
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>