$jnoc(document).ready(function(){
	$jnoc('#gpass').validate({
				rules: {
					passb: {
						required: true
					}
					},
				messages: {
				    passb: {
						required : "Password Baru Harus diisi"
					}    
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var passb = $jnoc("#passb").val();
				var passl = $jnoc("#passl").val();
				
				$jnoc.ajax({
					url: "aksi/php/editpass/editpass.php", 
					type:"POST",
					data: { aksi:"editpass",passl:passl,passb:passb },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Password Mikrotik SUKSES diganti");  
					$jnoc("#myModal").modal("show");
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Password Mikrotik GAGAL diganti");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
				}
	});		
});