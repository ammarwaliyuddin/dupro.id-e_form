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
                            <td><a target="_blank" href="" class="btn btn-primary btn-sm">Lihat</a></td>
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

            