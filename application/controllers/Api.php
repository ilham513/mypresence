<?php
use chriskacerguis\RestServer\RestController;

class Api extends RestController{
	// construct
	public function __construct(){
		parent::__construct();
		$this->load->model('api_model');
	}
	
    //Menampilkan data
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $hasil = $this->db->get('log_absen')->result();
        } else {
            $this->db->where('id_absen', $id);
			$this->db->join('siswa', 'log_absen.id_siswa = siswa.id_siswa');
            $hasil = $this->db->get('log_absen')->result();
        }
        $this->response($hasil, 200);
    }	
}
?>