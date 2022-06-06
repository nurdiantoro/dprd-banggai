<?php foreach ($abouts as $about) {
} ?>
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tentang</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editTentang/1') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Tentang DPRD Kabupaten Banggai Laut</td>
                    <td>:</td>
                    <td width="80%">
                        <textarea name="tentang" rows="5" class="form-control"><?= $about->tentang ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>VISI</td>
                    <td>:</td>
                    <td>
                        <textarea name="visi" rows="5" class="form-control"><?= $about->visi ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
                <tr>
                    <td>MISI</td>
                    <td>:</td>
                    <td>
                        <textarea name="misi" rows="5" class="form-control"><?= $about->misi ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter</small>
                    </td>
                </tr>
            </table>

            <hr class="sidebar-divider d-none d-md-block">

            <button class="btn btn-primary w-50 text-center mx-auto d-block" type="submit">Simpan</button>
        </form>
    </div>
</div>