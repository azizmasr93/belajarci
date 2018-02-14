<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function post_data()
	{
		$halaman = $this->uri->segment(3);
		if ($halaman == 'profil') {
			$data = array(
				'nama' 		=> $this->input->post('nama',TRUE),
				'alamat' 	=> $this->input->post('alamat',TRUE),
				'pk_status' => $this->input->post('pk_status',TRUE),
			);
		} 
		else if ($halaman == 'user') {
			$data = array(
				'username' 	=> $this->input->post('username',TRUE),
				'password' 	=> md5($this->input->post('password',TRUE)),
			);
		}
		else if ($halaman == 'status') {
			$data = array(
				'pk_status' => $this->input->post('pk_status',TRUE),
				'status' 		=> $this->input->post('status',TRUE),
			);
		}

		if ($this->do_upload()){
			$data['gambar'] = $this->upload->data('file_name');
		}

		// $xss = $this->security->xss_atclean($data);

		return $data;
	}

	public function do_upload()
	{
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = TRUE;
		// $config['max_size'] = '100';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';
		
		$this->load->library('upload',$config);

		if (! $this->upload->do_upload('gambar')){
			//echo $this->upload->display_errors();
			return FALSE;
		}
		else {
			//echo "success";
			return TRUE;
		}
			
	}


	public function cek_sql($sql,$halaman)
	{
		if ($sql) {
			$this->session->set_flashdata('sukses', 'data berhasil dimanipulasi');
			echo 1;
			redirect(site_url('admin/daftar/'.$halaman),'refresh');
		} else {
			$this->session->set_flashdata('gagal', 'data gagal dimanipulasi');
			echo 0;
			redirect(site_url('admin/input/'.$halaman),'refresh');
		}
		
	}

	public function template($page='home')
	{
		$data = $this->data();
		$data['judul']		= ucfirst($page);
		
		$data['meta'] 		= $this->parser->parse('section/meta'	,$data,true); 
		$data['css'] 		= $this->parser->parse('section/css'	,$data,true); 
		$data['flash'] 		= $this->parser->parse('section/flash'	,$data,true); 
		$data['nav' ]		= $this->parser->parse('section/nav'	,$data,true); 
		$data['header'] 	= $this->parser->parse('section/header'	,$data,true); 
		$data['konten'] 	= $this->parser->parse('page/'.$page	,$data,true); 
		$data['footer'] 	= $this->parser->parse('section/footer'	,$data,true); 
		$data['js'] 		= $this->parser->parse('section/js'		,$data,true); 

		$this->parser->parse('index',$data,false);
	}

	public function data()
	{
		$name = $this->security->get_csrf_token_name();
		$hash = $this->security->get_csrf_hash();
		$hide =  array($name => $hash, );
		$halaman = $this->uri->segment(3);
		$id 	 = $this->uri->segment(4);
		$data['form_input'] = form_open_multipart('admin/insert/'.$halaman,'id="form"',$hide);
		$data['form_ubah'] 	= form_open_multipart('admin/update/'.$halaman.'/'.$id,'id="form"',$hide);
		$data['form_upload'] = form_open_multipart('admin/upload/','id="form"',$hide);
		$data['form_login'] = form_open_multipart('cek_login','id="form"');
		$data['ubah'] 		= isset($id) ? $this->{$halaman}->ubah($id) : '';
		$data['halaman'] 	= site_url('halaman').'/';
		$data['admin'] 		= site_url('admin').'/';
		$data['index'] 		= site_url();
		$data['user']		= $this->user->tampil();
		$data['profil']		= $this->profil->tampil();
		$data['profil_join']= $this->profil->tampil_join();
		$data['status']		= $this->status->tampil();

		return $data;
	}

	public function front($page='home')
	{
		$data = $this->data();
		$data['judul'] = $page;
		
		$data['meta'] 		= $this->parser->parse('section/meta'	,$data,true); 
		$data['css'] 		= $this->parser->parse('section/css'	,$data,true); 
		$data['flash'] 		= $this->parser->parse('section/flash'	,$data,true); 
		$data['nav' ]		= $this->parser->parse('section/nav'	,$data,true); 
		$data['header'] 	= $this->parser->parse('section/header'	,$data,true); 
		$data['konten'] 	= $this->parser->parse('page/'.$page	,$data,true); 
		$data['footer'] 	= $this->parser->parse('section/footer'	,$data,true); 
		$data['js'] 		= $this->parser->parse('section/js'		,$data,true); 

		$this->parser->parse('index',$data,false);

	}

	public function back($page='home')
	{
		$data = $this->data();
		$data['judul'] = $page;

		$data['meta'] 		= $this->parser->parse('admin/section/meta',$data,true); 
		$data['css'] 		= $this->parser->parse('admin/section/css',$data,true); 
		$data['nav'] 		= $this->parser->parse('admin/section/nav',$data,true); 
		$data['sidebar'] 	= $this->parser->parse('admin/section/sidebar',$data,true); 
		$data['header'] 	= $this->parser->parse('admin/section/header',$data,true); 
		$data['flash'] 		= $this->parser->parse('admin/section/flash',$data,true); 
		$data['konten'] 	= $this->parser->parse('admin/page/'.$page,$data,true); 
		$data['footer'] 	= $this->parser->parse('admin/section/footer',$data,true); 
		$data['js'] 		= $this->parser->parse('admin/section/js',$data,true); 

		$this->parser->parse('admin/index',$data,false);
	}

	public function log_in()
	{
		$data = $this->data();
		$data['judul'] = 'login';

		$data['meta'] 		= $this->parser->parse('login/section/meta',$data,true); 
		$data['css'] 		= $this->parser->parse('login/section/css',$data,true); 
		$data['js'] 		= $this->parser->parse('login/section/js',$data,true); 
		
		$this->parser->parse('login',$data,false);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */