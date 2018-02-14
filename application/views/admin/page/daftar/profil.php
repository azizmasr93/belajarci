<div class="box box-solid box-primary">
 <div class="box-header">
     <h4 class="box-title">Data Profil</h4>
	<a class="btn btn-default pull-right" href="<?=site_url('admin/input/profil/') ?>" data-toggle="tooltip" title="Menambahkan Data Profil">
	<i class="fa  fa-plus"></i> Tambah Data</a>	
</div>
<div class="box-body">
<table class="table table-hover">	
	<thead>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Status</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		{profil_join}
		<tr>
			<td>{nama}</td>
			<td>{alamat}</td>
			<td>{status}</td>
			<td><img src="<?=base_url('assets/upload/{gambar}')?>" width="50" class="img-responsive" alt="Image"></td>
			<td>
				<!-- <a href="<?=site_url('admin/hapus/profil/{pk_profil}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Profil : {nama} ?')">Hapus</a> -->
				<!-- <a href="<?=site_url('admin/hapus/profil/{pk_profil}') ?>">Hapus</a> -->
				<!-- <a href="<?=site_url('admin/ubah/profil/{pk_profil}') ?>">Ubah</a> -->
					
				<a class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit Data" href="<?=site_url('admin/ubah/profil/{pk_profil}') ?>"><i class="glyphicon glyphicon-pencil"></i></a>
				<a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Data" href="<?=site_url('admin/hapus/profil/{pk_profil}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Profil : {nama} ?')"><i class="glyphicon glyphicon-trash"></i></a>



			</td>
		</tr>
		{/profil_join}
	</tbody>
</table>
</div>
</div>