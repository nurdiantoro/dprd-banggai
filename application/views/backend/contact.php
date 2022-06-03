<?php foreach ($contacts as $contact) {
} ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Contact</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editContact/1') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Maps</td>
                    <td>:</td>

                    <td><input type="text" class="form-control" name="maps" value="<?= $contact->maps ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="alamat" value="<?= $contact->alamat ?>"></td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="telp" value="<?= $contact->telp ?>"></td>
                </tr>
                <tr>
                    <td>Fax</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="fax" value="<?= $contact->fax ?>"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="email" value="<?= $contact->email ?>"></td>
                </tr>
                <tr>
                    <td>facebook</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="facebook" value="<?= $contact->facebook ?>"></td>
                </tr>
                <tr>
                    <td>Twitter</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="twitter" value="<?= $contact->twitter ?>"></td>
                </tr>
                <tr>
                    <td>Youtube</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="youtube" value="<?= $contact->youtube ?>"></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="instagram" value="<?= $contact->instagram ?>"></td>
                </tr>
            </table>

            <hr class="sidebar-divider d-none d-md-block">

            <button class="btn btn-primary w-50 text-center mx-auto d-block" type="submit">Simpan</button>
        </form>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Pesan Masuk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $message) { ?>
                        <tr>
                            <td><?= $message->nama ?></td>
                            <td><?= $message->email ?></td>
                            <td><?= $message->pesan ?></td>
                            <td>
                                <a href="<?= base_url('admin/message/') . $message->id ?>" class="btn btn-sm btn-outline-primary">edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" modal-id="<?= $message->id ?>" modal-judul="<?= $message->nama ?>">Delete</button>
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
                <p>Ingin mengapus news <strong class="judul text-primary">ini</strong></p>
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

        modalTitle.textContent = 'New message to ' + id
        modalJudul.textContent = judul
        buttonDelete.href = "<?= base_url('admin/hapusContactpesan/') ?>" + id;
    })

    // Datatables
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>