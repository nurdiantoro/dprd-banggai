<?php foreach ($homepages as $homepage) {
} ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Homepage</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editHomepage/1') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Title 1</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" placeholder="Title-1" name="title-1" value="<?= $homepage->title_1 ?>"></td>
                </tr>
                <tr>
                    <td>Title 2</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" placeholder="Title-2" name="title-2" value="<?= $homepage->title_2 ?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><input type="text" class="form-control" placeholder="subtitle" name="subtitle" value="<?= $homepage->subtitle ?>"></td>
                </tr>
                <tr>
                    <td>Background</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="background">
                        <input class="form-control" type="hidden" name="background-lama" value="<?= $homepage->background ?>">
                    </td>
                </tr>
                <tr>
                    <td>Banner</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="banner">
                        <input class="form-control" type="hidden" name="banner-lama" value="<?= $homepage->banner ?>">
                    </td>
                </tr>
            </table>

            <hr class="sidebar-divider d-none d-md-block">

            <button class="btn btn-primary w-50 text-center mx-auto d-block" type="submit">Simpan</button>
        </form>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Preview</h6>
    </div>
    <div class="card-body">
        <div id="home">
            <section class="header" style="background-image:url('<?= base_url() ?>assets/img/<?= $homepage->background ?>') ;">
                <div class="header-content text-center">
                    <h1 class="white-100"><?= $homepage->title_1 ?></h1>
                    <h1 class="warna-01"><?= $homepage->title_2 ?></h1>
                    <P class="white-100 "><?= $homepage->subtitle ?></P>
                </div>
            </section>
        </div>
    </div>
</div>