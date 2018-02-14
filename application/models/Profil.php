<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_Model {

	protected $tabel='profil';
	
	public function tampil_join ()
	{
		$this->db->join('tb_status', 'tb_status.pk_status = tb_profil.pk_status');
		return $this->db->get('tb_profil')->result();
	}

}

/* End of file Profil.php */
/* Location: ./application/models/Profil.php */