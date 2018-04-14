$jnoc(document).ready(function(){
    // Hapus
	$jnoc("#hapus").click(function(){
		$jnoc("#lproses").show();
		var id = $jnoc("#idnya").val();
			$jnoc.ajax({
				url: "aksi/php/limitasi/hapus.php",
				type:"POST",						
				data: {aksi:"hapus",idh:id},
				dataType:"json",
				chache: false,
				success : function(respon){
				if (respon==1){
					location.reload();
				} else {
					$jnoc("#lproses").hide();
					$jnoc('.error-text').text("ada kesalahan saat proses hapus. cobalah beberapa saat lagi!"); 
					exit();	
				}
				}
			});
	});
	
	$jnoc(".hapus").click(function(){
		$jnoc("#lproses").hide();
		var isi = $jnoc(this);
		var id = isi.attr("id");
		var nama = isi.attr("svn");
		if (id=="*0"){ 
		$jnoc('.error-text').text("Maaf, group limitasi '"+nama+"' tidak boleh dihapus"); 
		$jnoc("#hapus").hide(); 
		} else { 
		$jnoc('.error-text').text("anda yakin akan menghapus group limitasi '"+nama+"' ini?"); 
		$jnoc("#hapus").show(); 
		}
		$jnoc("#idnya").val(id);  			
		$jnoc("#myModal").modal("show");	
	});
	
});