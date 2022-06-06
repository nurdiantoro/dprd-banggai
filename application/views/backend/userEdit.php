<?php foreach ($user as $item) {
} ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">New User</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/editUser/') . $item->user_id ?>" method="POST">
            <table class="w-100">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="user_name" value="<?= $item->user_name ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="user_email" value="<?= $item->user_email ?>">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" name="user_password" value="<?= $item->user_password ?>">
                    </td>
                </tr>
                <tr align="right">
                    <td colspan="3">
                        <a href="<?= base_url('admin/manage_user') ?>" class="btn btn-sm btn-danger">Kembali</a>
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