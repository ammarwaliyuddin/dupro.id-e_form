<?php $this->load->view('Layout/header.php') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Perjanjian</h1>
        <p class="mb-4">Berisi Daftar Perjanjian dari Client Mitra.</p>
        <?php if($this->session->flashdata('sukses')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?= $this->session->flashdata('sukses') ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <!-- <h6 class="m-0 font-weight-bold text-primary">List Perjanjian</h6> -->
                <a href="<?= base_url('add_perjanjian') ?>" class="btn btn-primary ">Tambah Perjanjian</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Harga</th>
                                <th>Pembagian Komisi</th>
                                <?php if($this->session->userdata('level') == 1): ?>
                                    <th>Active</th>
                                <?php else: ?>
                                    <th>Detail</th>
                                <?php endif ?>
                                <th>Surat Perjanjian</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $no=1; foreach($result as $item): ?>
                            <?php $pemilik =$item->nama_pemilik ?>
                            <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $item->nama ?></td>
                            <td><?= $item->alamat ?></td>
                            <td>Rp. <?=  number_format($item->harga,2,",",".") ?></td>
                            <td><?php
                                if(strlen($item->pembagian_komisi)>2){
                                    echo 'Rp. '.number_format($item->pembagian_komisi,2,",",".");
                                }else{
                                    echo $item->pembagian_komisi.'%';
                                }?></td>
                            <?php if($this->session->userdata('level') == 1): ?>
                                <td>
                                    <input type="checkbox" class="myCheck"  <?php if($item->active ==1){echo "checked";} ?>>
                                    <!-- <p id="text" style="display:none" >Checkbox is CHECKED!</p> -->
                                </td>
                            <?php else: ?>
                                <td><?= $item->detail ?></td>
                            <?php endif ?>
                            
                            <td><a target="_blank" href="<?= base_url("form/cetak/".$item->type_perjanjian."/".$item->no_ktp."/".$pemilik."") ?>" class="btn btn-primary btn-sm">Lihat</a></td>
                            </tr>
                            <?php endforeach?>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php $this->load->view('Layout/footer.php') ?>
<script>
$(".myCheck").on('change',function() {
    console.log(this.checked)
    if(this.checked) {
      // checkbox is checked
    }
});
</script>

            