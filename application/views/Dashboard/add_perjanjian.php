<?php $this->load->view('Layout/header.php') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Perjanjian kerjasama</h1>
           
        </div>
        
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6 mt-4">
                <!-- <a href="<?= base_url() ?>form" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                <div class="card mb-4">
                  
                    <div class="card-body">
                        <form action="<?= base_url() ?>form/add_with_agen_registered" method="post" enctype="multipart/form-data">
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
                                <!-- via agen = 2 -->
                                <input type="hidden" value="2" name="cetak">
                            <div class="form-group">
                                <label for="nama_pemilik" class="label-control">Nama Pemilik Properti</label>
                                <input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Harga" class="label-control">Harga</label>
                                <input type="number" name="Harga" id="Harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="komisi" class="label-control">Pembagian Komisi jika terjual <span style="font-size: 12px;"> (dalam % atau sejumlah nominal)</span></label>
                                <input type="number" name="komisi" id="komisi" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="detail" class="label-control">Detail</label>
                                <textarea name="detail"  class="form-control" id="detail" cols="20" rows="10" required></textarea>
                            </div>
                           
                            <div class="form-group">
                                <label for="surat" class="label-control">Surat Legal Property</label>
                                <input type="file" name="surat" id="surat" class="form-control" required>
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
    <!-- /.container-fluid -->


         
<?php $this->load->view('Layout/footer.php') ?>
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