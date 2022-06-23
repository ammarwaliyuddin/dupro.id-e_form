<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href=" <?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    
    <div class="container">
        

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    
                                    <?php if($this->session->flashdata('sukses')) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong><?= $this->session->flashdata('sukses') ?></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif ?>
                                    
                                    <form class="user" method="post" >
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" name="nama" value=""
                                                placeholder="Masukkan Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="nik" name="nik" value=""
                                                placeholder="Masukkan KTP">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="telp" name="telp" value=""
                                                placeholder="Masukkan telp/wa Aktif">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" value=""
                                                placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="ttl" name="ttl" value=""
                                                placeholder="Masukkan Tempat, Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="usia" name="usia" value=""
                                                placeholder="Masukkan Usia">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="kotaAsal" name="kotaAsal" value=""
                                                placeholder="Masukkan Kota Asal">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="domisili" name="domisili" value=""
                                                placeholder="Masukkan Domisili">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="pekerjaan" name="pekerjaan" value=""
                                                placeholder="Masukkan Pekerjaan Saat ini">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-control-user" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input form-control-user " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label  class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                       
                                    </form>
                                   
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('login'); ?>">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

</body>

</html>