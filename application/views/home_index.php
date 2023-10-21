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
				<form>
				  <div class="mb-3">
					<label class="form-label">Nama</label>
					<input type="text" class="form-control" placeholder="Masukan nama anda..." >
				  </div>
				  
				  <div class="mb-3">
					<label class="form-label">Kelas</label>
					<input type="text" class="form-control" placeholder="Masukan kelas anda..." >
				  </div>
				  
				  <div class="mb-3">
					<label class="form-label">Kode Absen</label>
					<input type="text" class="form-control w-50" placeholder="Kode absen dari guru anda...">
				  </div>

				  <div class="mb-3">
					<label class="form-label">Lokasi <a href="#">[Ambil Lokasi]</a></label>
					<input type="text" class="form-control" readonly placeholder="Klik 'Ambil Lokasi' dahulu" >
				  </div>
				  
				  <div class="mb-3">
					<label class="form-label">Foto Selfie</label>
					<input id="myFileInput" type="file" accept="image/*" capture="user" class="form-control">
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
  </body>
</html>