<?php
foreach ($newsPages as $newsPage) {
} ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">News</h6>
        <a href="<?= base_url('admin/news/tambah') ?>" class="btn btn-primary">Tambah News</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($newses as $news) { ?>
                        <tr>
                            <td><?= $news->judul ?></td>
                            <td><?= date_format(new DateTime($news->tanggal), 'd F Y'); ?></td>
                            <td>
                                <a href="<?= base_url('admin/news/') . $news->id ?>" class="btn btn-sm btn-outline-primary">edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" modal-id="<?= $news->id ?>" modal-judul="<?= $news->judul ?>">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row" id="news">
    <div class="col-md-9">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">News Page Setting</h6>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/editNewsPage/1') ?>" method="POST" enctype="multipart/form-data">
                    <table class="" width="100%" cellspacing="0">
                        <tr>
                            <td>Berita Utama 1</td>
                            <td>:</td>
                            <td>
                                <select id="select-state" placeholder="Pilih Berita" name="berita_utama1">
                                    <?php if ($newsPage->berita_utama1 == null) { ?>
                                        <option value="">Select a state...</option>
                                    <?php } else { ?>
                                        <option value="<?= $newsPage->berita_utama1 ?>"><?= $newsPage->berita_utama1 ?></option>
                                    <?php } ?>
                                    <?php foreach ($newses as $news) { ?>
                                        <option value="<?= $news->id ?>"><?= $news->judul ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Berita Utama 2</td>
                            <td>:</td>
                            <td>
                                <select id="select-state" placeholder="Pilih Berita" name="berita_utama2">
                                    <?php if ($newsPage->berita_utama2 == null) { ?>
                                        <option value="">Select a state...</option>
                                    <?php } else { ?>
                                        <option value="<?= $newsPage->berita_utama2 ?>"><?= $newsPage->berita_utama2 ?></option>
                                    <?php } ?>
                                    <?php foreach ($newses as $news) { ?>
                                        <option value="<?= $news->id ?>"><?= $news->judul ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Berita Utama 3</td>
                            <td>:</td>
                            <td>
                                <select id="select-state" placeholder="Pilih Berita" name="berita_utama3">
                                    <?php if ($newsPage->berita_utama3 == null) { ?>
                                        <option value="">Select a state...</option>
                                    <?php } else { ?>
                                        <option value="<?= $newsPage->berita_utama3 ?>"><?= $newsPage->berita_utama3 ?></option>
                                    <?php } ?>
                                    <?php foreach ($newses as $news) { ?>
                                        <option value="<?= $news->id ?>"><?= $news->judul ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Banner</td>
                            <td>: </td>
                            <td>
                                <input type="file" class="form-control" name="banner" value="<?= $newsPage->banner ?>">
                                <input type="hidden" class="form-control" name="banner-lama" value="<?= $newsPage->banner ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Youtube</td>
                            <td>: </td>
                            <td>
                                <input type="text" class="form-control" name="youtube" value="<?= $newsPage->youtube ?>" placeholder="Masukan iframe youtube">
                                <small>contoh : https://www.youtube.com/watch?v=</small><small class="text-danger">tqMBiJg5Kss</small><br>
                                <small>masukan yang berwarna </small><small class="text-danger">merah</small>
                            </td>
                        </tr>
                    </table>
                    <button class="btn btn-primary text-center ml-auto mt-2 d-block" type="submit">Simpan</button>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                News Sidebar Preview
            </div>
            <div class="news-sidebar">
                <div class="news-sidebar-banner my-3">
                    <img src="<?= base_url('assets/img/news/') . $newsPage->banner ?>" class="img-fluid">
                </div>
                <div class="news-sidebar-title">
                    Youtube
                    <iframe src="https://www.youtube.com/embed/<?= $newsPage->youtube ?>" class="img-fluid"></iframe>
                </div>
            </div>
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

        modalTitle.textContent = 'Hapus Berita'
        modalJudul.textContent = judul
        buttonDelete.href = "<?= base_url('admin/hapusNews/') ?>" + id;
    })

    // Datatables
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });

    // Selectize
    $(document).ready(function() {
        $('select').selectize({
            sortField: 'text'
        });
    });
</script>