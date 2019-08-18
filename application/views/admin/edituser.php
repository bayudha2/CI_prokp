<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4" style="color:black;"><?= $label; ?></h1>
    <!--  -->


    <div class="row">
        <div class="col-lg-8">



            <form method="post" action="<?= base_url('admin/edituser/').$user['id']; ?>">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['n_name']; ?>">
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['nama']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Role</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <select name="role_id" id="role_id" class="form-control">
                                    <option value="">select Role</option>
                                    <?php foreach ($role as $r) : ?>
                                        <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>