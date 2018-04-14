$jnoc(document).ready(function(){
	$jnoc('#user').validate({
				rules: {
					nama: {
						required: true
					},
					group: {
						required: true
					},					
					pass: {
						required: true
					},
					ket: {
						required: true
					}
					},
				messages: {
				    nama: {
						required : "Nama Harus diisi"
					},
				    group: {
						required : "Group Harus dipilih"
					},				    
					pass: {
						required : "Password Harus diisi"
					},
				    ket: {
						required : "Keterangan Harus diisi"
					}					
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var pass = $jnoc("#pass").val();
				var nama = $jnoc("#nama").val();
				var group = $jnoc("#group").val();
				var ket = $jnoc("#ket").val();
				
				$jnoc.ajax({
					url: "aksi/php/usermikrotik/save.php", 
					type:"POST",
					data: { aksi:"save",pass:pass,nama:nama,group:group,ket:ket },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#pass").val("");
					$jnoc("#nama").val("");
					$jnoc("#group").val("-- Pilih --");
					$jnoc("#ket").val("");
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Data User Berhasil disimpan.");  
					$jnoc("#myModal").modal("show");
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("User GAGAL disimpan");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
				}
	});	
});