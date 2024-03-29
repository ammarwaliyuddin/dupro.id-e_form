<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendaftaran</title>

    <!-- Custom fonts for this template-->
    <link href=" <?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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
                                        <h1 class="h4 text-gray-900 mb-4">Pendaftaran Mitra!</h1>
                                    </div>
                                    
                                    <?php if($this->session->flashdata('sukses')) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong><?= $this->session->flashdata('sukses') ?></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif ?>
                                    
                                    <form class="user" method="post" action="<?= base_url('register'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="nama" name="nama" value=""
                                                placeholder="Masukkan Nama Lengkap" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="nik" name="nik" value=""
                                                placeholder="Masukkan No KTP" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" value=""
                                                placeholder="Masukkan Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="telp" name="telp" value=""
                                                placeholder="Masukkan telp/wa Aktif" required>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input class="form-control form-control-user" id="tanggalLahir" name="tanggalLahir" placeholder="Masukkan Tanggal Lahir"/>
                                                    
                                                </div>
                                            </div>
                                        </fieldset>
                                       
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="kotaAsal" name="kotaAsal" value=""
                                                placeholder="Masukkan Kota Asal" >
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
                                        

                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-12 pt-0">Apakah Sudah Pernah Memasarkan Properti?</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline ">
                                                        <input class="form-check-input  form-control-user" type="radio" name="memasarkanProperti" id="memasarkanProperti1" value="sudah" checked>
                                                        <label class="form-check-label" for="memasarkanProperti1">
                                                            Sudah
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="memasarkanProperti" id="memasarkanProperti2" value="belum">
                                                        <label class="form-check-label" for="memasarkanProperti2">
                                                            Belum
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </fieldset>
                                       
                                        
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-12 pt-0">Apakah Sudah Pernah Menghandle Survey bersama Pembeli Properti?</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline ">
                                                        <input class="form-check-input  form-control-user" type="radio" name="handleSurvey" id="handleSurvey1" value="sudah" checked>
                                                        <label class="form-check-label" for="handleSurvey1">
                                                            Sudah
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="handleSurvey" id="handleSurvey2" value="belum">
                                                        <label class="form-check-label" for="handleSurvey2">
                                                            Belum
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="handleSurvey" id="handleSurvey3" value="sering">
                                                        <label class="form-check-label" for="handleSurvey3">
                                                            Sering
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-12 pt-0">Apakah Sudah Pernah Closing Penjualan Properti ?</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline ">
                                                        <input class="form-check-input  form-control-user" type="radio" name="closingProperti" id="closingProperti1" value="sudah" checked>
                                                        <label class="form-check-label" for="closingProperti1">
                                                            Sudah
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="closingProperti" id="closingProperti2" value="belum">
                                                        <label class="form-check-label" for="closingProperti2">
                                                            Belum
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="closingProperti" id="closingProperti3" value="sering">
                                                        <label class="form-check-label" for="closingProperti3">
                                                            Sering
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-12 pt-0">Apakah Anda Pernah Mendapatkan Kepercayaan Memasarkan Properti dari Pemilik Langsung?</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline ">
                                                        <input class="form-check-input  form-control-user" type="radio" name="kepercayaanMemasarkan" id="kepercayaanMemasarkan1" value="sudah" checked>
                                                        <label class="form-check-label" for="kepercayaanMemasarkan1">
                                                            Sudah
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="kepercayaanMemasarkan" id="kepercayaanMemasarkan2" value="belum">
                                                        <label class="form-check-label" for="kepercayaanMemasarkan2">
                                                            Belum
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-12 pt-0">Pilih Jadwal Kerja Sebagai Agen Properti Mitra Dupro :</legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline ">
                                                        <input class="form-check-input  form-control-user" type="radio" name="jadwalKerja" id="jadwalKerja1" value="Part Time" checked>
                                                        <label class="form-check-label" for="jadwalKerja1">
                                                            Part Time
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="jadwalKerja" id="jadwalKerja2" value="Full Time">
                                                        <label class="form-check-label" for="jadwalKerja2">
                                                            Full Time
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input  form-control-user" type="radio" name="jadwalKerja" id="jadwalKerja3" value="Freelance">
                                                        <label class="form-check-label" for="jadwalKerja3">
                                                            Freelance
                                                        </label>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-12">Sebagai Agen Properti Mitra Dupro, keahlian apa yang paling Anda kuasai ? (Boleh centang lebih dari satu)</div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian1" name="keahlian[]" value="komunikasi">
                                                    <label class="form-check-label" for="keahlian1">
                                                    Komunikasi Expert Face to Face
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian2" name="keahlian[]" value="service">
                                                    <label class="form-check-label" for="keahlian2">
                                                    Service Excellent (Pelayanan Prima)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian3" name="keahlian[]" value="nego">
                                                    <label class="form-check-label" for="keahlian3">
                                                    Negosiasi & Lobby
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian4" name="keahlian[]" value="deal">
                                                    <label class="form-check-label" for="keahlian4">
                                                    Deal Maker
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian5" name="keahlian[]" value="telemarketing">
                                                    <label class="form-check-label" for="keahlian5">
                                                    Telemarketing (Komunikasi Via Telp)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian6" name="keahlian[]" value="promosi">
                                                    <label class="form-check-label" for="keahlian6">
                                                    Promosi Online
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian7" name="keahlian[]" value="legalitas">
                                                    <label class="form-check-label" for="keahlian7">
                                                    Legalitas Properti
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian8" name="keahlian[]" value="appraisal">
                                                    <label class="form-check-label" for="keahlian8">
                                                    Appraisal Properti
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian9" name="keahlian[]" value="kpr">
                                                    <label class="form-check-label" for="keahlian9">
                                                    KPR Perbankan
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian10" name="keahlian[]" value="pemerintah">
                                                    <label class="form-check-label" for="keahlian10">
                                                    Info Pengembangan Wilayah/Infrastruktur Pemerintah
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="keahlian11" name="keahlian[]" value="lainnya">
                                                    <label class="form-check-label" for="keahlian11">
                                                    Lainnya
                                                    </label>
                                                    <textarea type="text" name="lainnya" style="width: 100%;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-12 pt-0">Apakah Anda berkeinginan mendapatkan sertifikasi resmi dari Badan Nasional Sertifikasi Profesi (BNSP) sebagai Agen Propeti Resmi dan Professional bersama DUPRO.ID?</legend>
                                                <div class="col-12">
                                                    <div class="col-12 form-check  ">
                                                        <input class="form-check-input  form-control-user" type="radio" name="sertifikatBNSP" id="sertifikatBNSP1" value="ya" checked>
                                                        <label class="form-check-label" for="sertifikatBNSP1">
                                                            Ya,karena,
                                                        </label>
                                                        <textarea type="text" name="textSertifikatBNSP[ya]" style="width: 100%;"></textarea>
                                                    </div>
                                                    <div class="col-12 form-check ">
                                                        <input class="form-check-input  form-control-user" type="radio" name="sertifikatBNSP" id="sertifikatBNSP2" value="tidak">
                                                        <label class="form-check-label" for="sertifikatBNSP2">
                                                            Tidak,Karena,
                                                        </label>
                                                        <textarea type="text" name="textSertifikatBNSP[tidak]" style="width: 100%;"></textarea>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </fieldset>
                                        
                                        <div class="form-group">
                                            <label for="fotoKtp" class="label-control">Upload KTP</label>
                                            <input type="file" name="fotoKtp" id="fotoKtp" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="fotoDiri" class="label-control">Upload Foto Diri</label>
                                            <input type="file" name="fotoDiri" id="fotoDiri" class="form-control" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Daftar
                                        </button>
                                        <hr>
                                       
                                    </form>
                                   
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('login'); ?>">Sudah Punya Akun? Login!</a>
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
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
    <script>
        $('#tanggalLahir').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd' 
        });
    </script>

</body>

</html>