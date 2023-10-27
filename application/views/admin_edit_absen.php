<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Kode Absen</title>

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
      <h1>Edit Kode Absen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=site_url('admin')?>">Home</a></li>
          <li class="breadcrumb-item active">Edit Kode Absen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
	
		<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Kode Absen</h5>

              <!-- General Form Elements -->
              <form action="<?=site_url('admin/edit_absen_go')?>" method="post">
                <div class="row mb-3">
				  <input type="hidden" name="id_absen" value="<?=$obj_absen->id_absen?>" class="form-control">
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Pelajaran</label>
                  <div class="col-sm-10">
                    <select name="id_pelajaran" class="form-select" aria-label="Default select example">
                      <option selected disabled>Pilih nama pelajaran</option>
					  <?php foreach($array_pelajaran as $pelajaran): ?>
                      <option <?=$pelajaran->id_pelajaran == $obj_absen->id_pelajaran ? 'selected' : '';?> value="<?=$pelajaran->id_pelajaran?>"><?=$pelajaran->nama_pelajaran?></option>
					  <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Guru</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_guru" list="data_guru" value="<?=$obj_absen->nama_guru?>" class="form-control">
					<datalist id="data_guru">
					<?php foreach($array_pelajaran as $pelajaran): ?>
						<option value="<?=$pelajaran->nama_guru?>">
					<?php endforeach; ?>	
					</datalist>
                  </div>
                </div>
				
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Kelas</legend>
                  <div class="col-sm-10">
                    <?php foreach($array_kelas as $kelas): ?>
					<div class="form-check">
                      <input <?=$kelas->id_kelas == $obj_absen->id_kelas ? 'checked' : '';?> class="form-check-input" type="radio" name="id_kelas" id="gridRadios1" value="<?=$kelas->id_kelas?>">
                      <label class="form-check-label" for="gridRadios1"><?=$kelas->nama_kelas?></label>
                    </div>
					<?php endforeach; ?>
                  </div>
                </fieldset>				
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input name="tanggal" value="<?=$obj_absen->tanggal?>" type="date" class="form-control">
                  </div>
                </div>
				<div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Jam Mulai</label>
                  <div class="col-sm-10">
                    <input name="jam_mulai" value="<?=$obj_absen->jam_mulai?>" type="time" class="form-control">
                  </div>
                </div>				
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Jam Selesai</label>
                  <div class="col-sm-10">
                    <input name="jam_selesai" value="<?=$obj_absen->jam_selesai?>" type="time" class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
	
	</section>

  </main><!-- End #main -->

  <?php $this->load->view('component/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>