<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ilham Setia Bhakti">
    <title>Homepage</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet" >
	<link href="<?=base_url();?>css/style.css" rel="stylesheet" >    
  </head>
  <body>
    
	<main>
	  <div class="container py-4">
		<header class="pb-3 mb-4 border-bottom">
		  <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
			<img src="<?=base_url()?>img/yadika.png" width="40" height="32" class="me-2"> 
			<span class="fs-4 fw-bold">SMA Yadika 13</span>
		  </a>
		</header>

		<div class="container" style="max-width: 900px;">
			<div class="clock">
				<span id="hour"></span>
				<span id="minute"></span>
				<span id="second"></span>
			</div>

			<div class="card">
			  <div class="card-header fw-bold">
				Absen Siswa
			  </div>
			  <div class="card-body">
				<form method="post" enctype="multipart/form-data" action="<?=site_url('home/home_absen_go')?>">
				  <div class="mb-3">
					<label class="form-label">Nama</label>
					<input name="nama_siswa" required list="list_murid" type="text" class="form-control" placeholder="Masukan nama anda..." >
					<datalist id="list_murid">
					<?php foreach($array_siswa as $siswa): ?>
						<option value="<?=$siswa->nama_siswa?>">
					<?php endforeach; ?>	
				  </div>
				  
				  <div class="mb-3">
					<label class="form-label">Kelas</label>
					<input class="d-none" type="radio" name="id_kelas" required value="-">
                    <?php foreach($array_kelas as $kelas): ?>
					<div class="form-check">
                      <input class="form-check-input" type="radio" name="id_kelas" id="gridRadios1" value="<?=$kelas->id_kelas?>">
                      <label class="form-check-label" for="gridRadios1"><?=$kelas->nama_kelas?></label>
                    </div>
					<?php endforeach; ?>
				  </div>
				  
				  <div class="mb-3">
					<label class="form-label">Kode Absen</label>
					<input required name="kode_absen" type="text" class="form-control w-50" placeholder="Kode absen dari guru anda...">
				  </div>

				  <div class="mb-3">
					<label class="form-label">Lokasi <span class="text-primary" onclick="getLocation()">(Ambil Lokasi)</span></label>
					<input required readonly name="lokasi" id="lokasi" type="text" class="form-control" placeholder="Klik 'Ambil Lokasi' dahulu" >
				  </div>
				  
				  <?php echo form_open_multipart('home/home_absen_go');?>	
				  
				  <div class="mb-3">
					<label class="form-label">Foto Selfie</label>
					<input type="file" enctype="multipart/form-data" name="gambar">
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Kirim</button>
				</form>
			  </div>
			</div>
		</div>

		<footer class="pt-3 mt-4 container text-muted border-top">
			<div class="d-flex justify-content-between">
				<div>&copy; 2023</div>
				<div><a href="<?=site_url('akun')?>">Login Admin</a></div>
			</div>		  
		</footer>
	  </div>
	</main>
	
	<script src="<?=base_url()?>js/script.js"></script> 
	<script>
	const x = document.getElementById("lokasi");

	function getLocation() {
	  if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	  } else { 
		x.innerHTML = "Geolocation is not supported by this browser.";
		alert("BROWSER NOT OK!");
	  }
	}

	function showPosition(position) {
	  console.log("OK");
	  x.value = position.coords.latitude + "," + position.coords.longitude;
	}
	</script>

  </body>
</html>