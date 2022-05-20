<section id="akd-list">
    <div class="container">
        <h2 class="warna-01 mb-4">ALAT KELENGKAPAN DEWAN</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/badanAnggaran">
                    <button class="btn-akd-list <?php if ($akdList == 'badanAnggaran') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-1"></i>Badan Anggaran</button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/pimpinanDprd">
                    <button class="btn-akd-list <?php if ($akdList == 'pimpinanDprd') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-2"></i>Pimpinan DPRD</button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/badanMusyawarah">
                    <button class="btn-akd-list <?php if ($akdList == 'badanMusyawarah') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-3"></i>Badan Musyawarah</button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/bappeda">
                    <button class="btn-akd-list <?php if ($akdList == 'bappeda') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-4"></i>BAPPEDA</button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi1">
                    <button class="btn-akd-list <?php if ($akdList == 'komisi1') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-5"></i>Komisi I</button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi2">
                    <button class="btn-akd-list <?php if ($akdList == 'komisi2') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-6"></i>Komisi II</button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi3">
                    <button class="btn-akd-list <?php if ($akdList == 'komisi3') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-7"></i>Komisi III</button>
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="<?= base_url() ?>akd/komisi4">
                    <button class="btn-akd-list <?php if ($akdList == 'komisi4') {
                                                    echo 'active';
                                                } ?>"><i class="icon icon-akd-8"></i>Komisi IV</button>
                </a>
            </div>
        </div>
    </div>
</section>