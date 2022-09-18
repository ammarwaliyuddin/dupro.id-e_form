<!DOCTYPE html>
<html>
<head>
	<title>Form Perjanjian</title>
    <style type="text/css">
        body{
            /* font-family: Arial, Helvetica, sans-serif; */
            font-family: dejavusans;
        }
        
		table tr td,
		table tr th{
			font-size: 10pt;
            
		}
        .mb-2{
            margin-bottom: 10px;
        }
        .font-weight-bold{
            font-weight: bold;
        }
        .mb-0{
            margin-bottom: 0;
        }
        .pt-1{
            padding-top: 10px;
            
        }
        .pb-1{
            padding-bottom: 10px;
        }
        .lh-2{
            
            line-height:20px;
        }
        .text-center{
            text-align: center;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .text-size-12{
            font-size: 12px;
        }
	</style>
   
</head>
<body>
	
	<div class="container-fluid">
		<table class="mb-1">
			<tbody>
				<tr>
					<td style="width: 20%;"><img style="height: 100px;" src="<?= base_url() ?>assets/images/logo.jpeg" alt=""></td>
					<td>
                    <h3 class="mt-0">DUPRO.ID | dunia-properti.com</h3>
					<p class="mt-0">Office: Jl. P. Nyak Makam Lambhuk Banda Aceh (PG Office Center)</p>
					<p class="mt-0">Mobile/Wa 082187682491. Email: admin@dunia-properti.com</p> 
				</tr>
			</tbody>
		</table>
		<div class="text-center"><h4> PERJANJIAN KERJASAMA JASA PEMASARAN</h4> </div>
		
		<table class='table table-bordered'>
			<tbody>
				<tr>
					<td colspan="3" class="pb-1">Yang bertanda tangan dibawah ini:</td>
				</tr>
				<tr>
					<td colspan="3" class="text-size-12 "><b>Pihak Pertama</b></td>
				</tr>
				<tr>
					<td style="width: 20%">Nama</td>
					<td style="width: 5%">:</td>
					<td><?= $result->nama; ?></td>
				</tr>
				<tr>
					<td style="width: 20%">Alamat</td>
					<td style="width: 5%">:</td>
					<td><?= $result->alamat; ?></td>
				</tr>
				<tr>
					<td style="width: 20%">Nomor KTP</td>
					<td style="width: 5%">:</td>
					<td><?= $result->no_ktp; ?></td>
				</tr>
				<tr>
					<td style="width: 20%">Nomor Telp/HP</td>
					<td style="width: 5%">:</td>
					<td><?= $result->no_telp ?></td>
				</tr>
                
				<tr>
					<td colspan="3" class="pt-1 pb-1"><?= $narasi_pertama; ?></td>
				</tr>
				<tr>
					<td colspan="3"><b>Pihak Kedua</b></td>
				</tr>
				<tr>
					<td style="width: 20%">Nama</td>
					<td style="width: 5%">:</td>
					<td>Deni Faelani</td>
				</tr>
				<tr>
					<td style="width: 20%">Alamat</td>
					<td style="width: 5%">:</td>
					<td>PT Dupro Niaga Investama (Jl. P. Nyak makam lambhuk) B.Aceh</td>
				</tr>
				<tr>
					<td style="width: 20%">Jabatan</td>
					<td style="width: 5%">:</td>
					<td>General Manager</td>
				</tr>
				<tr>
					<td colspan="3" class="pt-1">Untuk memasarkan penjualan properti yaitu </td>
				</tr>
				<tr>
					<td colspan="3"><?= $result->detail; ?></td>
				</tr>
				<tr>
					<td colspan="3">Dengan Harga <span class="font-weight-bold">Rp. <?= $harga; ?></span></td>
					
				</tr>
				<tr >
					<td colspan="3" class="pt-1"><?= $narasi_kedua; ?> </td>
				</tr>
				<tr>
					<td colspan="3">Platform dan Agensi Fee sebesar <span class="font-weight-bold">
						<?php
					if(strlen($result->pembagian_komisi)>2){
						echo 'Rp.'.number_format($result->pembagian_komisi,2,",",".");;
					}else{
						echo $result->pembagian_komisi.'%';
					}?></span> <?= $narasi_ketiga; ?></td>

				</tr>
				<tr>
					<td colspan="3">
						<span>Pembayaran Platform dan Agency Fee ditransfer ke  BSI </span>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<span>a.n PT DUPRO NIAGA INVESTAMA</span>
					</td>
				</tr>
				<tr>
					<td colspan="3">
					<span>NO REK. 7206904008</span>
					</td>
				</tr>
				<tr>
					<td style="width: 20%" class="font-weight-bold" class="pt-1">Terlampir : </td>
					<td style="width: 5%" colspan="2">:</td>
				</tr>
				<tr>
					<td colspan="3">Foto copy & KTP Legal Properti (SHM/SHGB/AJB/Sporadi/Warisan/Lainnya)</td>
				</tr>
				<tr>
					<td colspan="3">Demikian surat perjanjian kerjasama jasa pemasaran ini dibuat dengan kesepakatan bersama untuk dipergunakan sebagaimana mestinya.</td>
				</tr>
                
			
			</tbody>
		</table>
        <table class="table">
            <tbody>
                <tr>
                    <td></td>
                    <td>Banda Aceh, <?= $tgl; ?></td>
                </tr>
                <tr>
                    <td style="width:50%;" class="text-center">PIHAK PERTAMA</td>
                    <td style="width:50%;" class="text-center">PIHAK KEDUA</td>
                </tr>
                
                <tr>
                    <td class="text-center" style="font-style:italic ; font-family: 'Courier New', Courier, monospace;">
                    <h2><?= $result->nama; ?></h2>
                    </td>
                    <!-- <td style="height: 100px;" class="text-center"><img style="height: 100px;" src="<?= base_url() ?>assets/images/logo.jpeg" alt=""></td> -->
                    <td class="pt-1 pb-1 text-center" style=" font-style:italic ; font-family: 'Courier New', Courier, monospace; padding-top: 30px; padding-bottom: 30px;">
                    <h2>Deni Faelani</h2>
                    </td>
                </tr>
                <tr>
                    <td style="width:50%;" class="text-center">(<?= $result->nama; ?>)</td>
                    <td style="width:50%;" class="text-center">(Deni Faelani)</td>
                </tr>
            </tbody>

        </table>
	</div>
		

	

</body>
</html>