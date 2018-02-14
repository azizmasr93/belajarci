<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$array = array(
			'nama' => 'Aziz Masruhan'
		);

		$this -> session -> set_userdata($array);
	}

	public function index()
	{
		//echo "Belajar CI";
		$this -> template();

	}

	public function perkenalan()
	{
		$data = array('segment1'=> $this->uri->segment(1));
		$this->parser->parse('view_data',$data);
	}
	public function uri()
	{
		$sql 		= $this->{$halaman}->insert($data);
		echo $this->uri->segment(2);
	}
	public function halaman()
	{
		$halaman = $this->uri->segment(2);
		$this->template($halaman);
	}
	public function input()
	{
		$halaman = $this->uri->segment(2);
		$this->template('input/'.$halaman);
	}
	public function insert()
	{
		$halaman = $this->uri->segment(2);
		//$data = $this->data();
		$data = $this->post_data();
		//print_r($this->profil->insert($data)); /*tadi keluar angka 1 karena skrip ini*/
		//sekarang kita masukin ke table tb_profil
		//$sql = $this->profil->insert($data); sebelum dibuat dinamis dan hanya profil
		$sql = $this->{$halaman}->insert($data);
		$this->cek_sql($sql, $halaman);
	}
	public function hapus()
	{
		$halaman 	= $this->uri->segment(2);
		$id 		= $this->uri->segment(3);
		$sql 		= $this->profil->delete($id);
		$this->cek_sql($sql,$halaman);
	}
	public function ubah()
	{
		$halaman = $this->uri->segment(2);
		$this->template('ubah/'.$halaman);
	}
	public function update()
	{
		$halaman 	= $this->uri->segment(2);
		$id 		= $this->uri->segment(3);
		$data 		= $this->post_data();
		$sql 		= $this->{$halaman}->update($id,$data);
		$this->cek_sql($sql,$halaman);
	}

	
	/*function data sudah berhasil, kita pindahkan ke CORE MY_Controller
	/*function template disini di pindah ke CORE MY_Controller, 
	nantinya Extend CI_Controller diatas di arahkan ke MY_Controller*/

}

/* End of file Belajar.php */
/* Location: ./application/controllers/Belajar.php */