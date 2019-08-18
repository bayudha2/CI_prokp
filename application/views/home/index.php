<body style="background-color:rgba(255,255,255,0);background-position:center;background-repeat:no-repeat;background-size:cover;color:rgb(252,252,252);margin:0px; font-family:ABeeZee, sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#4c5c75;">
        <a class="navbar-brand" href="<?= base_url(); ?>">Diskominfo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
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
                    <a href="<?= base_url() ?>home/login"> <button class="btn btn-sm btn-dark" type="button" href="<?= base_url() ?>home/login"><i class="fa fa-sign-in" style="font-size:20px"></i> Masuk</button></a>
                </form>
            </ul>
        </div>
    </nav>
    <div class="d-flex align-items-center align-content-center" style="height:525px;">
        <div class="col align-items-center align-self-center" style="margin-top:-204px;">
            <h1 class="text-center" style="margin-top:145px;">Aplikasi Repositori</h1>
            <p class="text-center">Kumpulan dari banyak website dan aplikasi yang ada di Jawa Barat</p>
            <p class="text-center"><a class="btn btn-primary btn-lg justify-content-center align-items-center align-content-center align-self-center flex-nowrap" role="button" href="<?= base_url(); ?>total" style="margin-left:0px;background-color:#000000;">Lihat Disini</a></p>
        </div>
    </div>

</body>