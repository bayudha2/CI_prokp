<body style="background-size:cover;font-family:ABeeZee, sans-serif;background-color:rgb(255,255,255);background-image:url(&quot;assets/img/ban.jpg&quot;);">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#4c5c75;">
        <a class="navbar-brand" href="<?= base_url(); ?>">Diskominfo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>total">Total</a>
                </li>
                <li class="nav-item">
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
    <div class="team-boxed" style="background-color:rgba(238,244,247,0);">
        <div class="container" style="margin-top:35px;">
            <div class="intro"></div>
            <div class="row people" style="margin-top:100px;">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">WEBSITE</h3>
                        <p class="title">ada <?= $total['website'] ?> website</p><a class="btn btn-info" role="button" href="<?= base_url(); ?>tabel">Lihat Disini</a>
                        <div class="social"></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">PEMILIK</h3>
                        <p class="title">ada <?= $total['pemilik'] ?> pemilik</p><a class="btn btn-info" role="button" href="<?= base_url(); ?>pemilik">Lihat Disini</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">APLIKASI</h3>
                        <p class="title">ada <?= $total['app'] ?> aplikasi</p><a class="btn btn-info" role="button" href="<?= base_url(); ?>tabel1">Lihat Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>