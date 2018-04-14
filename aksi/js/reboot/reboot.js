$jnoc(document).ready(function(){
	$jnoc('#reboot').click(function(){
				$jnoc.ajax({
					url: "aksi/php/reboot/reboot.php", 
					type:"POST",
					data: { aksi:"reboot" },
					dataType:"json",
					chache: false,
					success : function(respon){
					if (respon==1){
					window.location.href="login.php";
					} else if (respon==0) {
					exit();
					}
					}
				});      
			
	});		
});