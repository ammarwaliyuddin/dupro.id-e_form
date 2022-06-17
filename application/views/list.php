<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dupro.id Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
<div class="container pt-4 d-flex align-items-center" style="flex-flow: column;">
  <h2>DAFTAR PATNER PADA EFORM</h2>
  <img class="m-2 " src="<?= base_url() ?>assets/images/land.png" alt="gambar">
  <table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Harga</th>
      <th scope="col">Pembagian Komisi</th>
      <th scope="col">Detail</th>
      <th scope="col">Surat Perjanjian</th>
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

</body>
</html>
