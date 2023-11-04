<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Absen ID</title>

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
  
  <script src="<?=base_url()?>js/jquery-3.7.1.min.js"></script>

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
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Waktu Absen</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Gambar</th>
                      </tr>
                    </thead>
                    <tbody>
<?php foreach($array_log_absen as $log_absen): ?>					
                      <tr>
                        <td><?=$log_absen->nama_siswa?></td>
                        <td><?=$log_absen->nama_kelas?></td>
                        <td><?=$log_absen->timestamp_absen?></td>
                        <td><a href="https://maps.google.com/maps?q=<?=$log_absen->lokasi?>&hl=id&z=14&amp" target="_blank">Lihat Lokasi</a></td>
                        <td><a target="_blank" href="<?=base_url('uploads/'.$log_absen->lokasi_gambar)?>">Lihat Gambar</a></td>
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
 	function ambilListAbsen() {
		$("#modal_body").empty();
		
		// jQuery is loaded  
		var url = '<?=site_url('api/index_get')?>';
		var data = { id: 3	 };
		var datatype = 'jsonp';

		function success(response) {
			// console.log(response) 
			
			$.each(response, function(i, item) {
				// console.log(response[i]);
				$( "#modal_body" ).append( "<tr><td>"+response[i].nama_siswa+"</td><td>"+response[i].timestamp_absen+"</td><td><a href='https://maps.google.com/maps?q="+response[i].lokasi+"&hl=id&z=14&amp' target='_blank'>Tampilkan Lokasi</a></td><td>Keterangan</td></tr>" );
			});
		}

		$.get(url, data, success, datatype)			
	}
  
	var myModal = document.getElementById('myModal')
	var myInput = document.getElementById('myInput')

  </script>

</body>

</html>