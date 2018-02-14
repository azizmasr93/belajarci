 <div class="box box-solid box-primary">
 <div class="box-header">
     <h4 class="box-title">Data Status</h4>
	<a class="btn btn-default pull-right" href="<?=site_url('admin/input/status/') ?>" data-toggle="tooltip" title="Menambahkan Data Status">
	<i class="fa  fa-plus"></i> Tambah Data</a>	
</div>
<div class="box-body">
	<table class="table table-hover">	
		<thead>
			<tr>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			{status}
			<tr>
				<td>{status}</td>
				<td>
					<!-- <a href="<?=site_url('admin/hapus/status/{pk_status}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Status : {status} ?')">Hapus</a>
					<a href="<?=site_url('admin/ubah/status/{pk_status}') ?>">Ubah</a> -->

					<a class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit Data" href="<?=site_url('admin/ubah/status/{pk_status}') ?>"><i class="glyphicon glyphicon-pencil"></i></a>
					<a class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus Data" href="<?=site_url('admin/hapus/status/{pk_status}') ?>" onclick="return confirm('Anda Yakin Menghapus Data Status : {status} ?')"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			{/status}
		</tbody>
	</table>
</div>
</div>