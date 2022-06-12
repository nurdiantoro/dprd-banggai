<?php
$badanAnggaran = $pimpinanDprd = $badanMusyawarah = $bapemperda = $komisi1 = $komisi2 = $komisi3 = $komisi4 = '';
if ($this->uri->segment(2) == 'badanAnggaran') {
    $badanAnggaran = 'active';
} elseif ($this->uri->segment(2) == 'pimpinanDprd') {
    $pimpinanDprd = 'active';
} elseif ($this->uri->segment(2) == 'badanMusyawarah') {
    $badanMusyawarah = 'active';
} elseif ($this->uri->segment(2) == 'bapemperda') {
    $bapemperda = 'active';
} elseif ($this->uri->segment(2) == 'komisi1') {
    $komisi1 = 'active';
} elseif ($this->uri->segment(2) == 'komisi2') {
    $komisi2 = 'active';
} elseif ($this->uri->segment(2) == 'komisi3') {
    $komisi3 = 'active';
} elseif ($this->uri->segment(2) == 'komisi4') {
    $komisi4 = 'active';
}
?>

<section id="akd-list">
    <div class="container">
        <h2 class="warna-01 mb-4">ALAT KELENGKAPAN DEWAN</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/badanAnggaran">
                    <button class="btn-akd-list <?= $badanAnggaran ?>">
                        <i class="icon icon-akd-1"></i>
                        <span>Badan Anggaran</span>
                    </button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/pimpinanDprd">
                    <button class="btn-akd-list <?= $pimpinanDprd ?>">
                        <i class="icon icon-akd-2"></i>
                        <span>Pimpinan DPRD</span>
                    </button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/badanMusyawarah">
                    <button class="btn-akd-list <?= $badanMusyawarah ?>">
                        <i class="icon icon-akd-3"></i>
                        <span>Badan Musyawarah</span>
                    </button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/bapemperda">
                    <button class="btn-akd-list <?= $bapemperda ?>">
                        <i class="icon icon-akd-4"></i>
                        <span>BAPEMPERDA</span>
                    </button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi1">
                    <button class="btn-akd-list <?= $komisi1 ?>">
                        <i class="icon icon-akd-5"></i>
                        <span>Komisi I</span>
                    </button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi2">
                    <button class="btn-akd-list <?= $komisi2 ?>">
                        <i class="icon icon-akd-6"></i>
                        <span>Komisi II</span>
                    </button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi3">
                    <button class="btn-akd-list <?= $komisi3 ?>">
                        <i class="icon icon-akd-7"></i>
                        <span>Komisi III</span>
                    </button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi4">
                    <button class="btn-akd-list <?= $komisi4 ?>">
                        <i class="icon icon-akd-8"></i>
                        <span>Komisi IV</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>