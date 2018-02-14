<!-- <div class="container">
<div class="row"> 
<table class="table table-hover">
	<a href="<?=site_url('admin/input/user/') ?>">Tambah</a>
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		{user}
		<tr>
			<td>{username}</td>
			<td>{password}</td>
			<td>
				
				<a></a>
				<a href="<?=site_url('admin/hapus/user/{pk_user}') ?>">Hapus</a>
				<a></a>
				<a href="<?=site_url('admin/ubah/user/{pk_user}') ?>">Ubah</a>
			</td>
		</tr>
		{/user}
	</tbody>
</table>
</div>
</div>

batas

<div class="container">
<div class="row"> 
<table class="table table-hover">
	<a href="<?=site_url('admin/input/profil/') ?>">Tambah</a>
	<thead>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		{profil}
		<tr>
			<td>{nama}</td>
			<td>{alamat}</td>
			<td>
				
				<a></a>
				<a href="<?=site_url('admin/hapus/profil/{pk_profil}') ?>">Hapus</a>
				<a></a>
				<a href="<?=site_url('admin/ubah/profil/{pk_profil}') ?>">Ubah</a>
			</td>
		</tr>
		{/profil}
	</tbody>
</table>
</div>
</div> -->


			<a href="{admin}daftar/profil"><i class="fa fa-user"></i> Profil</a>
			<br>
            <a href="{admin}daftar/user"><i class="fa fa-user"></i> User</a>
            <br>
            <a href="{admin}daftar/status"><i class="fa fa-user"></i> Status</a>