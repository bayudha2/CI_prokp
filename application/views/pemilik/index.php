<body style="background-color:#5a7aad; font-family:ABeeZee, sans-serif;background-size:auto;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#4c5c75;">
        <a class="navbar-brand" href="<?= base_url(); ?>">Diskominfo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>total">Total</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>pemilik">Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-left:780px;"> <i class="fa fa-facebook-square" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-left:15px;"> <i class="fa fa-instagram" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-left:15px;"> <i class="fa fa-twitter" style="font-size:20px"></i></a>
                </li>
                <form class="form-inline" style="margin-left:20px;">
                    <a href="<?= base_url() ?>home/login"><button class="btn btn-sm btn-dark" type="button"><i class="fa fa-sign-in" style="font-size:20px"></i> Masuk</button></a>
                </form>
            </ul>
        </div>
    </nav>

    <div class="container mt-5" style="text-align:center; font-size:300%; color:white;">
        <strong>Tabel <?= $tabel; ?></strong>
    </div>

    <!-- <table id="table_id" class="display">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table> -->
    <div class="container mt-5">
        <div class="table-responsive mt-5">
            <table class="table dataTable table-bordered table-hover table-dark" id="table_id" style="bardius-radius:20px;">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah Website</th>
                        <th scope="col">Jumlah Aplikasi</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pemilik as $pmk) : ?>
                        <tr>
                            <td><?= $pmk['nama']; ?></td>
                            <td><?= $pmk['jmlh_web']; ?></td>
                            <td><?= $pmk['jmlh_app']; ?></td>
                            <td><a class="btn btn-secondary" href="<?= base_url('pemilik/lihat_detail/' . $pmk['id']) ?>" type="button">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
<script>

</script>