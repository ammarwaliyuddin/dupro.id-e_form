<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>e-Form Tambah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- {{-- <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/app.css')}}" /> --}} -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                background-color: rgba(241,245,248);
            }
            
            .btn-blue {
                color: rgba(255,255,255);
                border-color: rgba(28,63,170);
                background-color: rgba(28,63,170);
            }
        </style>
    </head>

    <body>
        
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-6 mt-4">
                    <!-- <a href="<?= base_url() ?>form" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                    <div class="card mb-4">
                        <img class="mt-2" src="<?= base_url() ?>assets/images/land.png" alt="gambar">
                        <div class="card-body">
                            <form action="<?= base_url() ?>form/add" method="post" enctype="multipart/form-data">
                                <!-- {{csrf_field()}} -->
                                <h3 align="center">E-FORM PERJANJIAN KERJASAMA PEMASARAN PROPERTI</h3>
                                <?php if ($this->session->flashdata('error') != null) : ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>ERROR UPLOAD IIMAGE!</strong> <?= $this->session->flashdata('error'); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                
                                <?php endif ?>
                                 <!-- type cetak formulir -->
                                 <!-- via Perwakilan = 3 -->
                                 <input type="hidden" value="3" name="cetak">
                                <div class="form-group">
                                    <label for="nama" class="label-control">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control">
                                </div>
                
                                <div class="form-group">
                                    <label for="alamat" class="label-control">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp" class="label-control">Nomor KTP</label>
                                    <input type="number" name="no_ktp" id="no_ktp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="no_telp" class="label-control">Nomor Telp</label>
                                    <input type="number" name="no_telp" id="no_telp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pemilik" class="label-control">Nama Pemilik Properti</label>
                                    <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Harga" class="label-control">Harga</label>
                                    <input type="number" name="Harga" id="Harga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="komisi" class="label-control">Pembagian Komisi jika terjual <span style="font-size: 12px;"> (dalam % atau sejumlah nominal)</span></label>
                                    <input type="number" name="komisi" id="komisi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="detail" class="label-control">Detail</label>
                                    <textarea name="detail"  class="form-control" id="detail" cols="20" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="ktp" class="label-control">Upload KTP</label>
                                    <input type="file" name="ktp" id="ktp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="surat" class="label-control">Surat Legal Property</label>
                                    <input type="file" name="surat" id="surat" class="form-control">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" onclick="check()" class="form-check-input" id="setujui">
                                    <label class="form-check-label" for="setujui"> Apakah data sudah benar? & bersedia bekerjasama secara professional dengan dupro.id?</label>
                                </div>
                                
                                <input type="submit" id="cetak" value="Cetak perjanjian" style="display: none;" class="mt-2 btn btn-md btn-blue float-right">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        
        function check(){
            var cek = document.getElementById("setujui").checked;
            if(cek){
                document.getElementById("cetak").style.display = "inline-block";
            }else{
                document.getElementById("cetak").style.display = "none";
            }
        }
    </script>
</html>

