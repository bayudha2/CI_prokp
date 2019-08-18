<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4" style="color:black;"><?= $label; ?></h1>
    <!--  -->


    <div class="row">
        <div class="col-lg-8">



            <form method="post" action="<?= base_url('admin/edittabel/').$web['url_id']; ?>">
                <div class="form-group row">
                    <label for="nama_aps" class="col-sm-2 col-form-label">Nama Aplikasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_aps" name="nama_aps" value="<?= $web['nama_aps']; ?>">
                        <?= form_error('nama_aps', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="urlnya" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="urlnya" name="urlnya" value="<?= $web['urlnya']; ?>">
                        <?= form_error('urlnya', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Role</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <select name="tipe" id="tipe" class="form-control">
                                    <option value="">select Tipe</option>
                                    <?php foreach ($tipe as $t) : ?>
                                        <option value="<?= $t['id']; ?>"><?= $t['tipe_id']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
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