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
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url(); ?>pemilik">Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>pemilik" style="margin-left:780px;"> <i class="fa fa-facebook-square" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>pemilik" style="margin-left:15px;"> <i class="fa fa-instagram" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>pemilik" style="margin-left:15px;"> <i class="fa fa-twitter" style="font-size:20px"></i></a>
                </li>
                <form class="form-inline" style="margin-left:20px;">
                    <a href="<?= base_url() ?>home/login"> <button class="btn btn-sm btn-dark" type="button"><i class="fa fa-sign-in" style="font-size:20px"></i> Masuk</button></a>
                </form>
            </ul>
        </div>
    </nav>


    <div class="col align-items-center align-self-center" style="margin-top:-100px;">
        <h1 class="text-center" style="margin-top:145px; color:white;">Detail <?= $pemilik['nama'] ?></h1>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card text-white bg-dark shadow">
                    <div class="card-header">
                        Website
                    </div>
                    <div class="card-body">
                        <?php foreach ($website as $rows) { ?>
                            <div class="accordion" id="accordionExample">
                                <div class="card text-dark">
                                    <div class="card-header d-flex justify-content-between align-items-start" style="background-color:#e8e8e8;" id="heading<?= $rows['url_id'] ?>">
                                        <h5 class="mb-0">
                                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse<?= $rows['url_id'] ?>" aria-expanded="true" aria-controls="collapse<?= $rows['url_id'] ?>">
                                                <?= $rows['nama_aps'] ?>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse<?= $rows['url_id'] ?>" class="collapse" aria-labelledby="heading<?= $rows['url_id'] ?>" data-parent="#accordionExample">
                                        <div class="card-body" style="font-size:100%; font-weight:bold;">
                                            Deskripsi : <br>
                                            <div style="font-weight:normal; font-size:80%">ini deskripsinya</div>
                                        </div>
                                        <div class="card-body">
                                            <?= $rows['urlnya'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark shadow">
                    <div class="card-header">
                        Apps
                    </div>
                    <div class="card-body">
                        <?php foreach ($app as $rows) { ?>
                            <div class="accordion" id="accordionExample">
                                <div class="card text-dark">
                                    <div class="card-header d-flex justify-content-between align-items-start" style="background-color:#e8e8e8;" id="heading<?= $rows['url_id'] ?>">
                                        <h5 class="mb-0">
                                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse<?= $rows['url_id'] ?>" aria-expanded="true" aria-controls="collapse<?= $rows['url_id'] ?>">
                                                <?= $rows['nama_aps'] ?>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse<?= $rows['url_id'] ?>" class="collapse" aria-labelledby="heading<?= $rows['url_id'] ?>" data-parent="#accordionExample">
                                        <div class="card-body" style="font-size:100%; font-weight:bold;">
                                            Deskripsi : <br>
                                            <div style="font-weight:normal; font-size:80%">ini deskripsinya</div>
                                        </div>
                                        <div class="card-body" style="font-size:100%">
                                            <?= $rows['urlnya'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>