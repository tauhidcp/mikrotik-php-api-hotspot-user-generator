$jnoc(document).ready(function(){
	$jnoc('#loginform').validate({
				rules: {
					ip: {
						required: true
					},
					user: {
						required: true
					}
					},
				messages: {
				    ip: {
						required : "IP Address Harus diisi!"
					},
					user: {
						required : "Nama User Harus diisi!"
					}    
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var ip = $jnoc("#ip").val();
				var user = $jnoc("#user").val();
				var pass = $jnoc("#pass").val();
				
				$jnoc.ajax({
					url: "aksi/php/login/aksi_login.php", 
					type:"POST",
					data: { aksi:"login",ip:ip,pass:pass,user:user },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#lproses").hide();
					window.location.href="index.php";
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Koneksi Ke Mikrotik GAGAL! Periksa Koneksi dengan Router atau Username/Password Mungkin Kurang Tepat!");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
				}
	});		
});