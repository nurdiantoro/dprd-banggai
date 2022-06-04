<div class="card">
    <div class="card-header">Tambah News</div>
    <div class="card-body">
        <form action="<?= base_url('admin/tambahNews') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="judul">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <input type="date" class="form-control" name="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Banner</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="banner">
                        <small class="text-danger">*masimal 2mb</small>
                    </td>
                </tr>
                <tr>
                    <td>Isi</td>
                    <td>:</td>
                    <td>
                        <textarea class="form-control" rows="15" name="isi"></textarea>
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