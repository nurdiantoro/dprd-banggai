<?php
foreach ($akdteams as $akdteam) {
}

$kosong = $badanAnggaran = $pimpinanDprd = $badanMusyawarah = $bapemperda = $komisi1 = $komisi2 = $komisi3 = $komisi4 = '';
if ($akdteam->kategori == '') {
    $kosong = 'selected';
} elseif ($akdteam->kategori == 'Badan Anggaran') {
    $badanAnggaran = 'selected';
} elseif ($akdteam->kategori == 'Pimpinan DPRD') {
    $pimpinanDprd = 'selected';
} elseif ($akdteam->kategori == 'Badan Musyawarah') {
    $badanMusyawarah = 'selected';
} elseif ($akdteam->kategori == 'BAPEMPERDA') {
    $bapemperda = 'selected';
} elseif ($akdteam->kategori == 'Komisi I') {
    $komisi1 = 'selected';
} elseif ($akdteam->kategori == 'Komisi II') {
    $komisi2 = 'selected';
} elseif ($akdteam->kategori == 'Komisi III') {
    $komisi3 = 'selected';
} elseif ($akdteam->kategori == 'Komisi IV') {
    $komisi4 = 'selected';
}
?>
<div class="card">
    <div class="card-header">Tambah Team</div>
    <div class="card-body">
        <form action="<?= base_url('admin/editAkd/') . $akdteam->id ?>" method="POST" enctype="multipart/form-data">
            <table class="w-100">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="nama" value="<?= $akdteam->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="jabatan" value="<?= $akdteam->jabatan ?>">
                    </td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td>:</td>
                    <td>
                        <input class="form-control" type="file" name="foto">
                        <input type="hidden" name="foto-lama" value="<?= $akdteam->foto ?>">
                        <small class="text-danger">*masimal 2mb</small>
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <select class="form-control" name="kategori">
                            <option <?= $kosong ?> value="" disabled></option>
                            <option <?= $badanAnggaran ?> value="Badan Anggaran">Badan Anggaran</option>
                            <option <?= $pimpinanDprd ?> value="Pimpinan DPRD">Pimpinan DPRD</option>
                            <option <?= $badanMusyawarah ?> value="Badan Musyawarah">Badan Musyawarah</option>
                            <option <?= $bapemperda ?> value="BAPEMPERDA">BAPEMPERDA</option>
                            <option <?= $komisi1 ?> value="Komisi I">Komisi I</option>
                            <option <?= $komisi2 ?> value="Komisi II">Komisi II</option>
                            <option <?= $komisi3 ?> value="Komisi III">Komisi III</option>
                            <option <?= $komisi4 ?> value="Komisi IV">Komisi IV</option>
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