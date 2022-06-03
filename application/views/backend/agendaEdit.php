<?php foreach ($agendas as $agenda) {
} ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Agenda Baru</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editAgenda/') . $agenda->id ?>" method="POST">
            <table class="w-100">
                <tr>
                    <td>Judul Agenda</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="judul" value="<?= $agenda->judul ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Mulai</td>
                    <td>:</td>
                    <td><input class="form-control" type="date" name="tanggal-mulai" value="<?= $agenda->tanggal_mulai ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Selesai</td>
                    <td>:</td>
                    <td><input class="form-control" type="date" name="tanggal-selesai" value="<?= $agenda->tanggal_selesai ?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td>
                        <textarea name="deskripsi" rows="5" class="form-control"><?= $agenda->deskripsi ?></textarea>
                        <small class="text-danger">*ketik &lt;br&gt; untuk Enter </small>
                    </td>
                </tr>
                <tr align="right">
                    <td colspan="3">
                        <a href="<?= base_url('admin/agenda/all') ?>" class="btn btn-sm btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>