$jnoc(document).ready(function(){
	$jnoc('#glimitasi').validate({
				rules: {
					nama: {
						required: true
					},
					share: {
						required: true,
						digits:true
					},					
					limit: {
						required: true,
						digits:true
					},
					satuan: {
						required: true
					}
					},
				messages: {
				    nama: {
						required : "Nama Harus diisi"
					},
				    share: {
						required : "Shared User Harus diisi",
						digits : "Shared user harus angka"
					},				    
					limit: {
						required : "Limit Bandwidth Harus diisi",
						digits : "Limit Bandwidth Harus angka misal : 128/256/512"
					},
				    satuan: {
						required : "Satuan Harus dipilih"
					}					
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var share = $jnoc("#share").val();
				var nama = $jnoc("#nama").val();
				var limit = $jnoc("#limit").val();
				var satuan = $jnoc("#satuan").val();
				var aksi = $jnoc("#aksi").val();
				var id = $jnoc("#idnya").val();
				$jnoc.ajax({
					url: "aksi/php/limitasi/save.php", 
					type:"POST",
					data: { aksi:aksi,share:share,nama:nama,limit:limit,satuan:satuan,id:id },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#share").val("");
					$jnoc("#nama").val("");
					$jnoc("#satuan").val("-- Pilih --");
					$jnoc("#limit").val("");
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Data Group Limitasi Berhasil disimpan.");  
					$jnoc("#myModal").modal("show");
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Group Limitasi GAGAL disimpan");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
				}
	});	
});