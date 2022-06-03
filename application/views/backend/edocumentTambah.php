<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Upload e-Document Baru</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/tambahEdocument') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Judul e-Document</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="judul">
                    </td>
                </tr>
                <tr>
                    <td>File e-Document</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="file">
                        <small class="text-danger">*format dokumen .pdf .docx .doc .xls</small>
                    </td>
                </tr>
                <tr align="right">
                    <td colspan="3">
                        <a href="<?= base_url('admin/edocument/all') ?>" class="btn btn-sm btn-danger">Kembali</a>
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