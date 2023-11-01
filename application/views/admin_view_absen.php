<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Absen</title>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>css/niceadmin.css" rel="stylesheet">
  <link href="<?=base_url()?>css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>css/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=base_url()?>css/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=base_url()?>css/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>css/simple-datatables/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
	<?php $this->load->view('component/navbar')?>  
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
	<?php $this->load->view('component/sidebar')?>  
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>List Absen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=site_url('admin')?>">Home</a></li>
          <li class="breadcrumb-item active">Lists Absen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">


            <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <div class="d-flex justify-content-between">
					<h5 class="card-title">Data Absen</h5>
					<button class="btn btn-sm text-primary"><a href="<?=site_url('admin/add_absen')?>">Buat Kode Absen</a></button>
				  </div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Pelajaran</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Mulai</th>
                        <th scope="col">Jam Selesai</th>
                        <th scope="col">Kode Absen</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
<?php foreach($array_absen as $absen): ?>					
                      <tr>
                        <th scope="row"><?=$absen->id_absen?></th>
                        <td><?=$absen->nama_kelas?></td>
                        <td><?=$absen->nama_pelajaran?></td>
                        <td><?=$absen->tanggal?></td>
                        <td><?=$absen->jam_mulai?></td>
                        <td><?=$absen->jam_selesai?></td>
                        <td><span class="badge bg-success"><?=$absen->kode_absen?></span></td>
                        <td><a href="<?=site_url('admin/hapus_absen/'.$absen->id_absen)?>"><i class="bi bi-trash3"></i></a> | 
						<a href="<?=site_url('admin/edit_absen/'.$absen->id_absen)?>"><i class="bi bi-pencil-square"></i></a> | 
						<i data-bs-toggle="modal" data-bs-target="#exampleModal<?=$absen->id_absen?>" class="bi text-primary bi-eye-fill"></i></td>
                      </tr>
<?php endforeach; ?>					  
                    </tbody>
                  </table>

                </div>
				
              </div><!-- End Recent Sales -->
	
	</section>
  </main><!-- End #main -->

  <?php $this->load->view('component/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php foreach($array_absen as $absen): ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?=$absen->id_absen?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Absen <?=$absen->kode_absen?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<table class="table align-middle mb-0 bg-white">
		<thead>
			<tr>
			  <th scope="col">Nama</th>
			  <th scope="col">Jam Absen</th>
			  <th scope="col">Lokasi</th>
			  <th scope="col">Keterangan</th>
			</tr>
		</thead>
		  <tbody>
			<tr>
			  <td>Nama</td>
			  <td>Nama</td>
			  <td>Nama</td>
			  <td>Nama</td>
			</tr>
		  </tbody>
		</table>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

  
  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>css/apexcharts/apexcharts.min.js"></script>
  <script src="<?=base_url()?>css/chart.js/chart.umd.js"></script>
  <script src="<?=base_url()?>css/echarts/echarts.min.js"></script>
  <script src="<?=base_url()?>css/quill/quill.min.js"></script>
  <script src="<?=base_url()?>css/simple-datatables/simple-datatables.js"></script>
  <script src="<?=base_url()?>css/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url()?>css/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>js/main.js"></script>
  
  <script>
	var myModal = document.getElementById('myModal')
	var myInput = document.getElementById('myInput')

	myModal.addEventListener('shown.bs.modal', function () {
	  myInput.focus()
	})  
  </script>

</body>

</html>