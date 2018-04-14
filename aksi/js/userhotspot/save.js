$jnoc(document).ready(function(){
	$jnoc('#tuserhotspot').validate({
				rules: {
					user: {
						required: true
					},
					glimit: {
						required: true
					},					
					pass: {
						required: true
					},
				//	lwaktu: {
				//		required: true,
				//		digits:true
				//	},
				//	satuan: {
				//		required: true
				//	},
					ket: {
						required: true
					}
					},
				messages: {
				    user: {
						required : "Nama User Harus diisi"
					},
				    glimit: {
						required : "Group Limit Bandwidth Harus dipilih"
					},				    
					pass: {
						required : "Password Harus diisi"
					},					
				//	lwaktu: {
				//		required : "Limit Waktu Harus diisi",
				//		digits : "Limit Waktu Harus angka"
				//	}
				//	satuan: {
				//		required : "Satuan Harus dipilih"
				//	},
				    ket: {
						required : "Keterangan Harus diisi"
					}					
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var pass = $jnoc("#pass").val();
				var user = $jnoc("#user").val();
				var glimit = $jnoc("#glimit").val();
			//	var lwaktu = $jnoc("#lwaktu").val();
			//	var satuan = $jnoc("#satuan").val();
				var ket = $jnoc("#ket").val();
				var aksi = $jnoc("#aksi").val();
				var id = $jnoc("#idnya").val();
				
				$jnoc.ajax({
					url: "aksi/php/userhotspot/save.php", 
					type:"POST",
					//data: { aksi:aksi,id:id,satuan:satuan,lwaktu:lwaktu,pass:pass,user:user,glimit:glimit,ket:ket },
					data: { aksi:aksi,id:id,pass:pass,user:user,glimit:glimit,ket:ket },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#pass").val("");
					$jnoc("#user").val("");
					$jnoc("#glimit").val("-- Pilih --");
				//	$jnoc("#satuan").val("-- Pilih --");
					$jnoc("#ket").val("");
				//	$jnoc("#lwaktu").val("");
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Data User Hotspot Berhasil disimpan.");  
					$jnoc("#myModal").modal("show");
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("User Hotspot GAGAL disimpan");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
				}
	});	
});