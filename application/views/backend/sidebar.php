<?php
// variable untuk tiap menu sidebar
$index = $homepage = $akd = $news = $edocument = $agenda = $gallery = $tentang = $contact = $easpirasi = $manage_user = '';

// logika jika ada halaman yang aktif
if (!$this->uri->segment(2)) {
    $index = 'active';
} elseif ($this->uri->segment(2) == 'homepage') {
    $homepage = 'active';
} elseif ($this->uri->segment(2) == 'akd') {
    $akd = 'active';
} elseif ($this->uri->segment(2) == 'news') {
    $news = 'active';
} elseif ($this->uri->segment(2) == 'edocument') {
    $edocument = 'active';
} elseif ($this->uri->segment(2) == 'agenda') {
    $agenda = 'active';
} elseif ($this->uri->segment(2) == 'gallery') {
    $gallery = 'active';
} elseif ($this->uri->segment(2) == 'tentang') {
    $tentang = 'active';
} elseif ($this->uri->segment(2) == 'contact') {
    $contact = 'active';
} elseif ($this->uri->segment(2) == 'eAspirasi') {
    $easpirasi = 'active';
} elseif ($this->uri->segment(2) == 'manage_user') {
    $manage_user = 'active';
}
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('') ?>assets/img/Kabupaten-Banggai-Laut.png" style="height: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3">
            <span>DPRD</span>
        </div>
    </a>


    <div class="sidebar-heading text-light">
        <?= $this->session->userdata('username')  ?>
    </div>
    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= $homepage; ?>">
        <a class="nav-link" href="<?= base_url('admin/homepage') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Homepage</span>
        </a>
    </li>
    <li class="nav-item <?= $akd; ?>">
        <a class="nav-link" href="<?= base_url('admin/akd/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>AKD</span>
        </a>
    </li>
    <li class="nav-item <?= $news; ?>">
        <a class="nav-link" href="<?= base_url('admin/news/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>News</span>
        </a>
    </li>
    <li class="nav-item <?= $edocument; ?>">
        <a class="nav-link" href="<?= base_url('admin/eDocument/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>e-Document</span>
        </a>
    </li>
    <li class="nav-item <?= $agenda; ?>">
        <a class="nav-link" href="<?= base_url('admin/agenda/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Agenda</span>
        </a>
    </li>
    <li class="nav-item <?= $gallery; ?>">
        <a class="nav-link" href="<?= base_url('admin/gallery/all') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Gallery</span>
        </a>
    </li>
    <li class="nav-item <?= $tentang; ?>">
        <a class="nav-link" href="<?= base_url('admin/tentang') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Tentang</span>
        </a>
    </li>
    <li class="nav-item <?= $contact; ?>">
        <a class="nav-link" href="<?= base_url('admin/contact') ?>">
            <i class="fa-solid fa-file"></i>
            <span>Contact</span>
        </a>
    </li>
    <li class="nav-item <?= $easpirasi; ?>">
        <a class="nav-link" href="<?= base_url('admin/eAspirasi') ?>">
            <i class="fa-solid fa-file"></i>
            <span>e-Aspirasi</span>
        </a>
    </li>

    <?php
    if ($this->session->userdata('level') == 1) { ?>
        <li class="nav-item <?= $manage_user; ?>">
            <a class="nav-link" href="<?= base_url('admin/manage_user') ?>">
                <i class="fa-solid fa-user"></i>
                <span>Manage User</span>
            </a>
        </li>
    <?php } ?>

    <li class="nav-item <?= $manage_user; ?>">
        <div class="nav-link">
            <button type="button" class="btn btn-outline-danger bg-light w-100" data-bs-toggle="modal" data-bs-target="#logout">
                <i class="fa-solid fa-right-from-bracket text-danger"></i>
                <span>Logout</span>
            </button>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Logout</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a href="<?= base_url('login/logout') ?>" type="button" class="btn btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>

<div class="w-100 m-5">