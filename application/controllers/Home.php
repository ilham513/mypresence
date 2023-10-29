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
		$config['upload_path'] = './uploads/' ;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
  
  
        $this->load->library('upload', $config);
  
        if (!$this->upload->do_upload('berkas')) 
        {
            $error = array('error' => $this->upload->display_errors());
  
            var_dump($error);
        } 
        else
        {
            $data = array('image_metadata' => $this->upload->data());
  
            $this->load->view('home_absen_go', $data);
        }
	}
}
