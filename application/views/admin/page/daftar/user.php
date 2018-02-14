<div class="box box-solid box-primary">
 <div class="box-header">
     <h4 class="box-title">Data User</h4>
	<a class="btn btn-default pull-right" href="<?=site_url('admin/input/user/') ?>" data-toggle="tooltip" title="Menambahkan Data User">
	<i class="fa  fa-plus"></i> Tambah Data</a>	
</div>
<div class="box-body">
<table class="table table-hover">
	<thead>
		<tr>
			<th>username</th>
			<th>password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		{user}
		<tr>
			<td>{username}</td>
			<td>{password}</td>
			<td>
				<a class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit Data" href="<?=site_url('admin/ubah/user/{pk_user}') ?>"><i class="glyphicon glyphicon-pencil"></i></a>
				<a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Data" href="<?=site_url('admin/hapus/user/{pk_user}') ?>" onclick="return confirm('Anda Yakin Menghapus Data User : {user} ?')"><i class="glyphicon glyphicon-trash"></i></a>
			</td>
		</tr>
		{/user}
	</tbody>
</table>
</div>
</div>