<div class="card">
    <div class="card-header">Tambah Team</div>
    <div class="card-body">
        <form action="<?= base_url('admin/tambahAkd') ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="nama">
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="jabatan">
                    </td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="foto">
                        <small class="text-danger">*masimal 2mb</small>
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" name="kategori">
                            <option selected disabled></option>
                            <option value="Badan Anggaran">Badan Anggaran</option>
                            <option value="Pimpinan DPRD">Pimpinan DPRD</option>
                            <option value="Badan Musyawarah">Badan Musyawarah</option>
                            <option value="BAPPEDA">BAPPEDA</option>
                            <option value="Komisi I">Komisi I</option>
                            <option value="Komisi II">Komisi II</option>
                            <option value="Komisi III">Komisi III</option>
                            <option value="Komisi IV">Komisi IV</option>
                        </select>
                    </td>
                </tr>
                <tr align="right">
                    <td colspan="3"><button type="submit" class="btn btn-sm btn-primary">submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>