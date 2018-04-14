$jnoc(document).ready(function(){
	$jnoc('#giden').validate({
				rules: {
					iden: {
						required: true
					}
					},
				messages: {
				    iden: {
						required : "Identity Harus diisi"
					}    
				},
				submitHandler: function(form) {
				
				$jnoc("#lproses").show();
				var iden = $jnoc("#iden").val();
				
				$jnoc.ajax({
					url: "aksi/php/editiden/editiden.php", 
					type:"POST",
					data: { aksi:"editiden",iden:iden },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Identity Mikrotik SUKSES diganti");  
					$jnoc("#myModal").modal("show");
					} else if (respon==0) {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("Identity Mikrotik GAGAL diganti");  
					$jnoc("#myModal").modal("show");
					
					}
					}
				});      
				}
	});		
	
	$jnoc('.tutup').click(function(){
		window.location.href="index.php?halaman=edit_identity_mikrotik";
	});
});