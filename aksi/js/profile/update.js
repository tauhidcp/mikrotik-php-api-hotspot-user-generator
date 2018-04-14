$jnoc(document).ready(function(){
	$jnoc('#profile').validate({
				rules: {
					nama: {
						required: true
					},
					group: {
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
				    ket: {
						required : "Keterangan Harus diisi"
					}					
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var id = $jnoc("#id").val();
				var nama = $jnoc("#nama").val();
				var group = $jnoc("#group").val();
				var ket = $jnoc("#ket").val();
				
				$jnoc.ajax({
					url: "aksi/php/profile/update.php", 
					type:"POST",
					data: { aksi:"update",id:id,nama:nama,group:group,ket:ket },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Profile Berhasil diperbarui.");  
					$jnoc("#myModal").modal("show");
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Profile GAGAL diperbarui");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
				}
	});		
});