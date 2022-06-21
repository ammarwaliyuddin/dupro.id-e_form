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
 
<div class="container pt-4">
  <h2>Dupro.id Form Perjanjian Kerjasama</h2>
  <p>Pilih Form sesuai kebutuhan:</p>
  <div class="card-columns">
    <div class="card bg-light">
      <div class="card-body text-center">
      <img class="m-2 card-img-top" src="<?= base_url() ?>assets/images/land.png" alt="gambar">
      <p class="card-text">Perjanjian Kersama Langsung Pemilik</p>
      <a href="<?= base_url(); ?>form" class="btn btn-primary">Isi Form</a>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
      <img class="m-2 card-img-top" src="<?= base_url() ?>assets/images/land.png" alt="gambar">
      <p class="card-text">Perjanjian Kersama Via Agen</p>
      <a href="<?= base_url(); ?>form_agen" class="btn btn-primary">Isi Form</a>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
      <img class="m-2 card-img-top" src="<?= base_url() ?>assets/images/land.png" alt="gambar">
      <p class="card-text">Perjanjian Kersama Via Perwakilan</p>
      <a href="<?= base_url(); ?>form_perwakilan" class="btn btn-primary">Isi Form</a>
      </div>
    </div>
   
   
  </div>
</div>

</body>
</html>
