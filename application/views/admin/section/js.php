<!-- JS -->




<!-- jQuery 3 -->
<script src="<?=base_url('assets/admin')?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets/admin')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url('assets/admin')?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url('assets/admin')?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/admin')?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/admin')?>/dist/js/demo.js"></script>
<script>
	$('#kirim_ajax').click(function(e) {
		e.preventDefault();
		var form = $('#form');
		var page = '<?=$this->uri->segment(3)?>';
		var data = new FormData($('#form')[0]);
		// $.post(
		// 	form.attr('action'),
		// 	form.serialize(),
		// 	function (keterangan) {
		// 		//alert(keterangan);
		// 		if(keterangan == 1){
		// 			alert('Data Berhasil Dimanipulasi');
		// 			location.href= '{admin}daftar/'+page;
		// 		}else{
		// 			alert('Data Gagal Dimanipulasi');
		// 			location.href= '{admin}input/'+page;
		// 		}
		// 	}
		// );
		$.ajax({
			url : form.attr('action'),
			data : data,
			type : 'POST',
			processData : false,
			contentType : false,
			success : function(keterangan){
				//alert(keterangan);
				if (keterangan==1)
				{
					alert('Berhasil');
					location.href = '{index}admin/daftar/'+page;
				} else 
				{
					alert('gagal');
					location.href = '{index}admin/input/'+page;
				}


			}
		});

	});
</script>

<!-- JS -->
