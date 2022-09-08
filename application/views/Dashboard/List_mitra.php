<?php $this->load->view('Layout/header.php') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Mitra</h1>
        <p class="mb-4">Berisi Daftar Mitra Dupro id</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Mitra</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Kota Asal</th>
                                <th>Domisili</th>
                                <th>Pekerjaan</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php $no=1; foreach($result as $item): ?>
                            <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $item->email ?></td>
                            <td><?= $item->noTelp ?></td>
                            <td><?= $item->kotaAsal?></td>
                            <td><?= $item->domisili; ?></td>
                            <td><?= $item->pekerjaan; ?></td>
                            <td>
                                <a type="button" id="lihat" class="btn btn-primary btn-sm" data-nik="<?= $item->nik; ?>" >
                                    Lihat
                                </a>
                            </td>
                            </tr>
                            <?php endforeach?>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<!-- detail mitra -->
<div class="modal fade modal-detail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Mitra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body detail-content">
       
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('Layout/footer.php') ?>
<script>
    $(document).ready(function(){
        
        $("#dataTable").on('click', '#lihat', function(){ 
           const nik = $(this).data('nik')
           $.ajax({
                type : "POST",
                url  : "<?= base_url('detail-mitra')?>",
                dataType : "JSON",
                data : {nik:nik },
                success: function(data){
                    content = ` 
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Foto</label>
                                        <img class="img-thumbnail" src="<?= base_url('assets/users/foto diri/'); ?>/${data.result.fotoDiri}" alt="Foto Diri" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>KTP</label>
                                        <img class="img-thumbnail" src="<?= base_url('assets/users/ktp/'); ?>/${data.result.fotoKtp}" alt="KTP" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="${data.result.nama.toUpperCase()}" readonly >
                                        
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" value="${data.result.email}" readonly> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">NIK</label>
                                    <input type="email" class="form-control" value="${data.result.nik}" readonly >
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="d_noTelp">Usia</label>               
                                        <input class="form-control" type="text" value="${data.result.usia} Tahun" readonly>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="d_noTelp">No Telp</label>               
                                        <input class="form-control" type="text" value="${data.result.noTelp}" readonly>
                                    </div>
                                </div>
                                
                            
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="d_kotaAsal">Kota Asal</label>               
                                        <input class="form-control" type="text" value="${data.result.kotaAsal}" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="d_domisili">Domisili</label>               
                                        <input class="form-control" type="text" value="${data.result.domisili}" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>               
                                    <input class="form-control" type="text" value="${data.result.pekerjaan}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Pernah Memasarkan Properti</label>
                                    <input class="form-control" type="text" value="${data.result.memasarkanProperti}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Pernah Menghandle Survey bersama Pembeli Properti</label>
                                    <input class="form-control" type="text" value="${data.result.handleSurvey}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Pernah Closing Penjualan Properti</label>
                                    <input class="form-control" type="text" value="${data.result.closingProperti}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Pernah Mendapatkan Kepercayaan Memasarkan Properti dari Pemilik Langsung</label>
                                    <input class="form-control" type="text" value="${data.result.kepercayaanMemasarkan}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Jadwal Kerja Sebagai Agen Properti Mitra Dupro</label>
                                    <input class="form-control" type="text" value="${data.result.jadwalKerja}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Bersedia mendapatkan sertifikasi resmi dari Badan Nasional Sertifikasi Profesi (BNSP) sebagai Agen Propeti Resmi dan Professional bersama DUPRO.ID</label>
                                    <input class="form-control" type="text" value="${data.result.sertifikatBNSP}, dengan Alasan ${data.result.textSertifikatBNSP}" readonly>
                                </div> 
                                <div class="form-group">
                                    <label>Keahlian</label>
                                    <div class"form-control">`
                                    $.each(data.keahlian, function(index, value) {
                                        if (value.nama_keahlian != 'lainnya'){
                                            content += `<span class="badge badge-info mr-2" style="font-size: 14px;">${value.nama_keahlian.toUpperCase()}</span>`
                                        }else{
                                            content += `<span class="badge badge-info mr-2" style="font-size: 14px;">${value.detail.toUpperCase()}</span>`
                                        }
                                    })
                                content += `</div></div></form>`;

                    $(".detail-content").empty();
                    $(".detail-content").html(content);
                    $('.modal-detail').modal('show');
                }
            })
        })

    })

    
</script>

            