<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
		
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{	
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		$data['array_siswa'] = $this->crud_model->mengambil_data('siswa');
	
		$this->load->view('home_index',$data);
	}

	public function home_absen_go()
	{	
		//cek apakah siswa terdaftar
		$array_siswa = $this->crud_model->mengambil_data_id('siswa','nama_siswa',$this->input->post('nama_siswa'));
		
		if($array_siswa){
			$obj_siswa = $array_siswa[0];
			
			$id_siswa = $obj_siswa->id_siswa;
		}else{
			//nama siswa ga ada
			echo '<script>alert("Siswa belum terdaftar, silahkan periksa ejaan nama atau hubungi admin!")</script>';
			
			//redirect
			redirect('home', 'refresh');
		}

		//cek apakah kode absen ada
		$array_absen = $this->crud_model->mengambil_data_id('absen','kode_absen',$this->input->post('kode_absen'));
		
		if($array_absen){
			$obj_absen = $array_absen[0];
			
			$id_absen = $obj_absen->id_absen;
		}else{
			//kode absen ga ada
			echo '<script>alert("Koda absen tidak tersedia, silahkan periksa ulang atau hubungi admin!")</script>';
			
			//redirect
			redirect('home', 'refresh');
		}
		
		//cek upload gambar
		if($_FILES['gambar']){
			$upload_dir = "uploads/"; //inisiasi direktori
			if (!file_exists($upload_dir)) {mkdir($upload_dir, 0777, true);} //buat dir kalo ga ada
			
			//config gambar
			$gambar = $_FILES["gambar"];
			$gambar_name = $gambar["name"];
			$gambar_tmp = $gambar["tmp_name"];
			$gambar_size = $gambar["size"];
			$gambar_error = $gambar["error"];

			//cek tipe gambar
			$allowed_types = ["image/jpeg", "image/png", "image/gif"]; 
			$gambar_mime = mime_content_type($gambar_tmp);
			
			//cek ukuran gambar
			if (!in_array($gambar_mime, $allowed_types)) { 
				echo "Tipe file gambar tidak diizinkan.";
			} else {
				$max_size = 5* 1024 * 1024; // 5 MB
				if ($gambar_size > $max_size) {
					echo "Ukuran gambar terlalu besar. Maksimal 5 MB.";
				} else {
					//rename gambar
					$gambar_extension = pathinfo($gambar_name, PATHINFO_EXTENSION);
					$new_gambar_name = uniqid(). '.' . $gambar_extension;
									
					$destination = $upload_dir.$new_gambar_name;
					if (move_uploaded_file($gambar_tmp, $destination)) { 
						echo "<!--Gambar berhasil diunggah.-->";
					} else {
						echo "<!--Gagal mengunggah gambar.-->";
					}				
				}
			}
			
			$lokasi_gambar = $new_gambar_name;
		}else{
			$lokasi_gambar = 'no_image';
		}

		//variabel data
		$data = array(
			'id_siswa' => $id_siswa,
			'id_kelas' => $this->input->post('id_kelas'),
			'id_absen' => $id_absen,
			'lokasi' => $this->input->post('lokasi'),
			'lokasi_gambar' => $lokasi_gambar		
		);
		
		//input data
		$this->crud_model->masukan_data('log_absen', $data);
		
		$this->load->view('home_absen_success');
	}
}
