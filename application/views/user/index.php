<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4" style="color:black;"><?= $label; ?></h1>


    <div class="row">
        <div class="col-lg">

        <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Nama Web</th>
                        <th scope="col">URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($tabel as $t) : ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $t['nama']; ?></td>
                            <td><?= $t['tipe_id']; ?></td>
                            <td><?= $t['nama_aps']; ?></td>
                            <td><?= $t['urlnya']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>