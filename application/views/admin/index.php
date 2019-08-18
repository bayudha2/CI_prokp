<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4" style="color:black;"><?= $label; ?></h1>
    <div class="col-lg-4">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
    </div>


    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newUserModal">Tambahkan aser Baru!</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($role as $r) : ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['n_name']; ?></td>
                            <td><?= $r['nama']; ?></td>
                            <td><?= $r['role']; ?></td>
                            <td><?= $r['is_active']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/edituser/') . $r['id']; ?>" class="badge badge-warning">edit</a>
                                <a href="<?= base_url('admin/hapusUser/'); ?><?= $r['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newUserModalLabel">Tambah User Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username..">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name..">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password...">
                    </div>
                    <div class="form-group">
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">select Role</option>
                            <?php foreach ($user as $u) : ?>
                                <option value="<?= $u['id']; ?>"><?= $u['role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Akitf ?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambakan</button>
                </div>
            </form>
        </div>
    </div>
</div>