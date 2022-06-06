<?php foreach ($edocumentpages as $edocumentpage) {
} ?>

<div id="e-document">
    <div class="container">
        <h1 class="warna-01 text-center m-0">E-DOCUMENT</h1>
        <p class="text-center"><?= $edocumentpage->deskripsi ?></p>

        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th style="width: 25% ;">Date</th>
                    <th style="width: 25% ;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($docs as $doc) { ?>
                    <tr>
                        <td><?= $doc->judul ?></td>
                        <td><?= $doc->tanggal ?></td>
                        <td>
                            <a href="<?= base_url('assets/e-document/') ?>" download="<?= $doc->file ?>">
                                <button class="btn-download">download</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </div>
</div>

<?php include 'section/agenda.php'; ?>
<?php include 'section/investigasi.php'; ?>
<?php include 'section/highlight-activity.php'; ?>
<?php include 'section/e-aspirasi.php'; ?>