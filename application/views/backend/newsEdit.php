<?php
foreach ($newses as $news) {
}
?>

<div class="card">
    <div class="card-header"><?= $news->judul ?></div>
    <div class="card-body">
        <div class="w-100 text-center">
            <img src="<?= base_url('assets/img/news/') . $news->banner ?>" class="img-fluid w-50">
        </div>
        <form action="<?= base_url('admin/editNews/') . $news->id ?>" method="post">
            <table class="w-100">
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" value="<?= $news->judul ?>" name="judul">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input type="date" placeholder="yyyy-mm-dd" class="form-control" value="<?= $news->tanggal ?>" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Banner</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="banner">
                        <input type="hidden" value="<?= $news->banner ?>" name="banner-lama">
                    </td>
                </tr>
                <tr>
                    <td>Isi</td>
                    <td>:</td>
                    <td>
                        <textarea class="form-control" rows="15" name="isi"><?= $news->isi ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter </small>
                    </td>
                </tr>
                <tr align="right">
                    <td colspan="3"><button type="submit" class="btn btn-sm btn-primary">submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>