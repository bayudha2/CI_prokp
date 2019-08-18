<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4" style="color:black;"><?= $label; ?></h1>
    <div class="col-lg-3">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
    </div>


    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newUrlModal">Tambahkan URL Baru!</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Nama Web</th>
                        <th scope="col">URL</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($tabel as $t) : ?>
                            <td scope="row"><?= $t['nama']; ?></td>
                            <td><?= $t['tipe_id']; ?></td>
                            <td><?= $t['nama_aps']; ?></td>
                            <td><?= $t['urlnya']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/edittabel/') . $t['url_id']; ?>" class="badge badge-warning">edit</a>
                                <a href="<?= base_url('admin/hapusUrl/'); ?><?= $t['url_id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newUrlModal" tabindex="-1" role="dialog" aria-labelledby="newUrlModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newUrlModalLabel">Tambah Url Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/edittable'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="pemilik_id" id="pemilik_id" class="form-control">
                            <option value="">Pilih Instansi</option>
                            <?php foreach ($biro as $b) : ?>
                                <option value="<?= $b['id']; ?>"><?= $b['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <select name="nickname" id="nickname" class="form-control">
                            <option value="">Pilih Username</option>
                            <?php foreach ($tabel as $t) : ?>
                                <option value="<?= $t['pemilik_id']; ?>"><?= $t['nickname']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <select name="tipe" id="tipe" class="form-control">
                            <option value="">Pilih Tipe</option>
                            <?php foreach ($tipe as $t) : ?>
                                <option value="<?= $t['id']; ?>"><?= $t['tipe_id']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_aps" name="nama_aps" placeholder="Nama aplikasi...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="urlnya" name="urlnya" placeholder="URL...">
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