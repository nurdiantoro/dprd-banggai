<div id="e-document">
    <div class="container">
        <h1 class="warna-01 text-center m-0">E-DOCUMENT</h1>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim etiam vel etiam aliquet aliquet sit blandit. Tellus enim arcu est placerat cras quam enim. Elementum non odio sed mattis ultrices in accumsan. Aliquet montes, sed egestas venenatis varius nullam feugiat adipiscing. Aliquet montes, sed egestas venenatis varius nullam feugiat adipiscing.</p>

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
                $i = 1;
                while ($i < 100) {
                    $i++;
                    echo '
                        <tr>
                        <td>Nama Dokumen</td>
                        <td>22 Januari 2021</td>
                        <td>
                            <a href="">
                                <button class="btn-download">download</button>
                            </a>
                        </td>
                        </tr>
                    ';
                }
                ?>

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