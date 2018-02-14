{form_ubah}
	<legend>Form Input Profil</legend>
	{ubah}
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" value="{nama}" placeholder="Input Nama">
	</div>
	
	<div class="form-group">
		<label for="">Alamat</label>
		<textarea name="alamat" class="form-control" rows="3">{alamat}</textarea>
	</div>
	<div class="form-group">
		<label for="">Status</label>
		<select name="pk_status" class="form-control">
			<option value="">Pilih Status</option>
			{status}
				<option value = "{pk_status}">{status}</option>
			{/status}
		</select> 
	</div>
	<div>
	  <img src="<?=base_url('assets/upload/{gambar}')?>" width="200" class="img-responsive" alt="Image">
	</div>

	<div class="form-group">
	<label for="">Pilih File</label>
		<input type="file" class="form-control" name="gambar" >
	</div>
	<br>
	</br>
	{/ubah}
	<button type="submit" id="kirim_ajax" class="btn btn-primary">Submit</button>
</form>
