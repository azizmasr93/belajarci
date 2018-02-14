  <!-- Main Content -->
    <div class="container">
      	<div class="row">  
{form_ubah}
<!-- <form action="{index}insert/Profil" method="POST" role="form">-->
	<legend>Form Input Profil</legend>
    {ubah}
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" value="{nama}" placeholder="Input Nama">
	</div>

	<div class="form-group">
		<label for="">Alamat</label>
		<textarea name="alamat" class="form-control" rows="3" required="required">{alamat}</textarea>
	</div>
    {/ubah}
	<button type="submit" class="btn btn-primary">Submit</button>
</form>


		</div>
	</div>