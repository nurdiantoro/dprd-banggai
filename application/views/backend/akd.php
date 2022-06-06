<?php foreach ($akdpages as $akdpage) {
} ?>


<!-- Preview -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Preview</h6>
    </div>
    <div class="card-body">
        <div id="akd">
            <section id="banner">
                <div class="container">
                    <img class="img-fluid" src="<?= base_url('/assets/img/') . $akdpage->banner ?>" alt="banner">
                </div>
            </section>

            <section id="akd-content">
                <div class="container">
                    <h1 class="text-center warna-01 m-0">AKD</h1>
                    <p class="text-center">Alat Kelengkapan Dewan</p>
                    <div class="row">
                        <div class="col-md-7">
                            <h2 class="warna-01">TENTANG AKD</h2>
                            <p><?= $akdpage->deskripsi ?></p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid p-5" src="<?= base_url('assets/img/') . $akdpage->image ?>" alt="stationary">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Page Form -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">AKD</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editAkdpage/1') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Banner</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="banner">
                        <input class="form-control" type="hidden" name="banner-lama" value="<?= $akdpage->banner ?>">
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi"><?= $akdpage->deskripsi ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Image Deskripsi</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="image">
                        <input class="form-control" type="hidden" name="image-lama" value="<?= $akdpage->image ?>">
                    </td>
                </tr>
            </table>

            <hr class="sidebar-divider d-none d-md-block">

            <button class="btn btn-primary w-50 text-center mx-auto d-block" type="submit">Simpan</button>
        </form>
    </div>
</div>

<!-- Page Form -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Deskripsi</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editAkddeskripsi/1') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td style="width: 20%;">Deskripsi Badan Anggaran</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_badanAnggaran"><?= $akdpage->deskripsi_badanAnggaran ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Pimpinan DPRD</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_pimpinanDprd"><?= $akdpage->deskripsi_pimpinanDprd ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Badan Musyawarah</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_badanMusyawarah"><?= $akdpage->deskripsi_badanMusyawarah ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi BAPPEDA</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_bappeda"><?= $akdpage->deskripsi_bappeda ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Komisi I</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_komisi1"><?= $akdpage->deskripsi_komisi1 ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Komisi II</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_komisi2"><?= $akdpage->deskripsi_komisi2 ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Komisi III</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_komisi3"><?= $akdpage->deskripsi_komisi3 ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Komisi IV</td>
                    <td>:</td>
                    <td>
                        <textarea rows="5" class="form-control" name="deskripsi_komisi4"><?= $akdpage->deskripsi_komisi4 ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
            </table>

            <hr class="sidebar-divider d-none d-md-block">

            <button class="btn btn-primary w-50 text-center mx-auto d-block" type="submit">Simpan</button>
        </form>
    </div>
</div>

<!-- Table -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items2-center">
        <h6 class="m-0 font-weight-bold text-primary">Team</h6>
        <a href="<?= base_url('admin/akd/tambah') ?>" class="btn btn-primary">Tambah Team</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($akdteams as $akdteam) { ?>
                        <tr>
                            <td><img src="<?= base_url('assets/img/akd/') . $akdteam->foto ?>" width="100px"></td>
                            <td><?= $akdteam->nama ?></td>
                            <td><?= $akdteam->jabatan ?></td>
                            <td><?= $akdteam->kategori ?></td>
                            <td>
                                <a href="<?= base_url('admin/akd/') . $akdteam->id ?>" class="btn btn-sm btn-outline-primary">edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" modal-id="<?= $akdteam->id ?>" modal-judul="<?= $akdteam->nama ?>">Delete</button>
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
                <p>Ingin mengapus <strong class="judul text-primary">ini</strong><span> ?</span></p>
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

        modalTitle.textContent = 'Hapus'
        modalJudul.textContent = judul
        buttonDelete.href = "<?= base_url('admin/hapusAkd/') ?>" + id;
    })

    // Datatables
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>