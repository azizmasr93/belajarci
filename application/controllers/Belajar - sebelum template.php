<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

	public function index()
	{
		echo "Belajar CI";
	}
	public function perkenalan()
	{
		$data = array('segment1'=> $this->uri->segment(1));
		$this->parser->parse('view_data',$data);
	}
	public function uri()
	{
		echo $this->uri->segment(2);
	}

}

/* End of file Belajar.php */
/* Location: ./application/controllers/Belajar.php */