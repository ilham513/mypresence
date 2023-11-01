<?php
use chriskacerguis\RestServer\RestController;

class Api extends RestController{
	// construct
	public function __construct(){
		parent::__construct();
		$this->load->model('api_model');
	}
	
    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('siswa')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('siswa')->result();
        }
        $this->response($kontak, 200);
    }	
}
?>