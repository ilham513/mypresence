<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('admin_index');
	}	

	public function view_absen()
	{
		$data['array_absen'] = $this->crud_model->mengambil_data_join('absen',['kelas','pelajaran']);
		
		$this->load->view('admin_view_absen',$data);
	}	
	
	public function view_pelajaran()
	{
		$data['array_pelajaran'] = $this->crud_model->mengambil_data('pelajaran');
		
		$this->load->view('admin_view_pelajaran',$data);
	}	
	
	public function view_siswa()
	{
		$data['array_siswa'] = $this->crud_model->mengambil_data('siswa');
		
		$this->load->view('admin_view_siswa',$data);
	}	
	
	public function view_kelas()
	{
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		
		$this->load->view('admin_view_kelas',$data);
	}	

	public function add_absen()
	{
		$data['array_pelajaran'] = $this->crud_model->mengambil_data('pelajaran');
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		
		$this->load->view('admin_add_absen',$data);
	}	
	
	public function add_siswa()
	{
		$data['array_pelajaran'] = $this->crud_model->mengambil_data('pelajaran');
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		
		$this->load->view('admin_add_siswa',$data);
	}	
	
	public function add_pelajaran()
	{
		$this->load->view('admin_add_pelajaran');
	}	
	
	public function add_kelas()
	{
		$this->load->view('admin_add_kelas');
	}	
	
	public function edit_pelajaran($id)
	{
		//load model crud
		$data['array_pelajaran'] = $this->crud_model->mengambil_data_id('pelajaran','id_pelajaran',$id);
		$data['obj_pelajaran'] = $data['array_pelajaran'][0];
		
		// var_dump($data);die();

		$this->load->view('admin_edit_pelajaran', $data);
	}	

	public function edit_absen($id)
	{
		//load model crud
		$data['array_absen'] = $this->crud_model->mengambil_data_id('absen','id_absen',$id);
		$data['array_pelajaran'] = $this->crud_model->mengambil_data('pelajaran');
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		$data['obj_absen'] = $data['array_absen'][0];

		// var_dump($data);die();

		$this->load->view('admin_edit_absen', $data);
	}	

	public function edit_kelas($id)
	{
		//load model crud
		$data['array_kelas'] = $this->crud_model->mengambil_data_id('kelas','id_kelas',$id);
		$data['obj_kelas'] = $data['array_kelas'][0];
		
		// var_dump($data);die();

		$this->load->view('admin_edit_kelas', $data);
	}	

	public function hapus_pelajaran($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('pelajaran','id_pelajaran',$id);

		//redirect
		redirect('/admin/view_pelajaran', 'refresh');
	}

	public function hapus_siswa($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('siswa','id_siswa',$id);

		//redirect
		redirect('/admin/view_siswa', 'refresh');
	}

	public function hapus_absen($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('absen','id_absen',$id);

		//redirect
		redirect('/admin/view_absen', 'refresh');
	}

	public function hapus_kelas($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('kelas','id_kelas',$id);

		//redirect
		redirect('/admin/view_kelas', 'refresh');
	}

	public function edit_pelajaran_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'nama_pelajaran' => $this->input->post('nama_pelajaran'),
			'nama_guru' => $this->input->post('nama_guru')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('pelajaran', $data,'id_pelajaran',$this->input->post('id_pelajaran'));
		
		//redirect
		redirect('/admin/view_pelajaran', 'refresh');
	}	
	
	public function edit_kelas_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
			'jumlah_murid' => $this->input->post('jumlah_murid')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('kelas', $data,'id_kelas',$this->input->post('id_kelas'));
		
		//redirect
		redirect('/admin/view_kelas', 'refresh');
	}	
	
	public function edit_absen_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'id_pelajaran' => $this->input->post('id_pelajaran'),
			'nama_guru' => $this->input->post('nama_guru'),
			'id_kelas' => $this->input->post('id_kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('absen', $data,'id_absen',$this->input->post('id_absen'));
		
		//redirect
		redirect('/admin/view_absen', 'refresh');
	}	
	
	public function add_pelajaran_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$data = array(
			'nama_pelajaran' => $this->input->post('nama_pelajaran'),
			'nama_guru' => $this->input->post('nama_guru')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('pelajaran', $data);
		
		//redirect
		redirect('/admin/view_pelajaran', 'refresh');
	}	
	
	public function add_siswa_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$data = array(
			'nisn' => $this->input->post('nisn'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama')
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('siswa', $data);
		
		//redirect
		redirect('/admin/view_siswa', 'refresh');
	}	
	
	public function add_absen_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$data = array(
			'id_pelajaran' => $this->input->post('id_pelajaran'),
			'nama_guru' => $this->input->post('nama_guru'),
			'id_kelas' => $this->input->post('id_kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai'),	
			'kode_absen' => strtoupper(substr(rand(),0,5))		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('absen', $data);
		
		//redirect
		redirect('/admin/view_absen', 'refresh');
	}	
	
	public function add_kelas_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
			'jumlah_murid' => $this->input->post('jumlah_murid')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('kelas', $data);
		
		//redirect
		redirect('/admin/view_kelas', 'refresh');
	}	
}