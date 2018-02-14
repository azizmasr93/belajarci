<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

	public function index()
	{
		$data = array('nama' => 'Wanto Ari Wibowo',
		              'alamat' => 'Jl. Pajak Terusan No.64',
		              'quote'=>'Saya Senang Belajar Codeigniter');
		// $this->load->view('view_data', $data);
		$this->parser->parse('view_data', $data);
	}

}

/* End of file Belajar.php */
/* Location: ./application/controllers/Belajar.php */