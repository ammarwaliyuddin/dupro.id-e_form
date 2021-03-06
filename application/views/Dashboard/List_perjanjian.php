<?php $this->load->view('Layout/header.php') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Perjanjian</h1>
        <p class="mb-4">Berisi Daftar Perjanjian dari Client Mitra.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Perjanjian</h6>
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
                                <th>Detail</th>
                                <th>Surat Perjanjian</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        <?php $no=1; foreach($result as $item): ?>
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
                            <td><?= $item->detail ?></td>
                            <td><a target="_blank" href="<?= base_url("form/cetak/".$item->type_perjanjian."/".$item->no_ktp."") ?>" class="btn btn-primary btn-sm">Lihat</a></td>
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

            