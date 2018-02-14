{form_input}
	<legend>Form Input Profil</legend>

	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" class="form-control" name="nama" placeholder="Input Nama">
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<textarea name="alamat" class="form-control" rows="3" required="required"></textarea>
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
	<div class="form-group">
	<label for="">Pilih File</label>
		<input type="file" class="form-control" name="gambar" >
	</div>
	<button type="submit" id="kirim_ajax" class="btn btn-primary">Submit</button>
</form>