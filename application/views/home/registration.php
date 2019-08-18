<body class="bg-gradient-primary" style="font-family:ABeeZee, sans-serif; background-color:#5a7aad;">
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

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('home/registration'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" style="border-radius:20px;" id="name" name="name" placeholder="Username" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" style="border-radius:20px;" id="fname" name="fname" placeholder="Nama Panjang" value="<?= set_value('fname'); ?>">
                                    <?= form_error('fname', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" style="border-radius:20px;" name="password1" id="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" style="border-radius:20px;" name="password2" id="password2" placeholder="Ulangi Password">
                                </div>
                                <button type="submit" style="border-radius:20px;" class="btn btn-primary btn-user btn-block">
                                    <strong>DAFTAR</strong>
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url(); ?>home/login">Disini Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>