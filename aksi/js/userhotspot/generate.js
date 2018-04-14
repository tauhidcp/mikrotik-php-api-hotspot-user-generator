$jnoc(document).ready(function(){
	$jnoc('#guserhotspot').validate({
				rules: {
					puser: {
						required: true
					},
					glimit: {
						required: true
					},					
					ppass: {
						required: true
					},
					lwaktu: {
						required: true,
						digits:true
					},
					satuan: {
						required: true
					},
					juser: {
						required: true
					},
					ket: {
						required: true
					}
					},
				messages: {
				    puser: {
						required : "Panjang Nama User Harus dipilih"
					},
				    glimit: {
						required : "Group Limit Bandwidth Harus dipilih"
					},				    
					ppass: {
						required : "Panjang Password Harus dipilih"
					},					
					lwaktu: {
						required : "Limit Waktu Harus diisi",
						digits : "Limit Waktu Harus angka"
					},
					satuan: {
						required : "Satuan Harus dipilih"
					},
					juser: {
						required : "Jumlah User Harus dipilih"
					},
				    ket: {
						required : "Keterangan Harus diisi"
					}					
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var ppass = $jnoc("#ppass").val();
				var puser = $jnoc("#puser").val();
				var glimit = $jnoc("#glimit").val();
				var lwaktu = $jnoc("#lwaktu").val();
				var satuan = $jnoc("#satuan").val();
				var ket = $jnoc("#ket").val();
				var juser = $jnoc("#juser").val();
				
				$jnoc.ajax({
					url: "aksi/php/userhotspot/generate.php", 
					type:"POST",
					data: { aksi:"generate",satuan:satuan,lwaktu:lwaktu,ppass:ppass,puser:puser,glimit:glimit,ket:ket,juser:juser },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#puser").val("-- Pilih --");
					$jnoc("#ppass").val("-- Pilih --");
					$jnoc("#glimit").val("-- Pilih --");
					$jnoc("#juser").val("-- Pilih --");
					$jnoc("#satuan").val("-- Pilih --");
					$jnoc("#ket").val("");
					$jnoc("#lwaktu").val("");
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Data User Hotspot Sebanyak "+juser+" Buah Berhasil DIGENERATE.");  
					$jnoc("#myModal").modal("show");
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("User Hotspot GAGAL digenerate");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
			}
	});	
});