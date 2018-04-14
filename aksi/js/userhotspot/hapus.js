$jnoc(document).ready(function(){
    // Hapus
	$jnoc("#hapus").click(function(){
		$jnoc("#lprosesh").show();
		var id = $jnoc("#idnya").val();
			$jnoc.ajax({
				url: "aksi/php/userhotspot/hapus.php",
				type:"POST",						
				data: {aksi:"hapus",idh:id},
				dataType:"json",
				chache: false,
				success : function(respon){
				if (respon==1){
					location.reload();
				} else {
					$jnoc("#lprosesh").hide();
					$jnoc('.error-text').text("ada kesalahan saat proses hapus. cobalah beberapa saat lagi!"); 
					exit();	
				}
				}
			});
	});
	
	$jnoc(".hapus").click(function(){
		$jnoc("#lprosesh").hide();
		$jnoc("#hapuss").hide();
		$jnoc("#resetc").hide();
		$jnoc("#cc").hide();
		var isi = $jnoc(this);
		var id = isi.attr("id");
		var nama = isi.attr("svn");
		$jnoc('.error-text').text("anda yakin akan menghapus user '"+nama+"' ini?"); 
		$jnoc("#hapus").show(); 
		$jnoc("#idnya").val(id);  			
		$jnoc("#myModal").modal("show");	
	});
	
	$jnoc(".hapussuser").click(function(){
		$jnoc("#lprosesh").hide();
		$jnoc("#hapus").hide();
		$jnoc("#resetc").hide();
		$jnoc("#cc").hide();
		$jnoc('.error-text').text("anda yakin akan menghapus semua data user hotspot? jika data lebih dari 500 Buah akan dilakukan secara bertahap."); 
		$jnoc("#hapuss").show(); 		
		$jnoc("#myModal").modal("show");	
	});
	
	    // Hapus
	$jnoc("#hapuss").click(function(){
		$jnoc("#lprosesh").show();
			$jnoc.ajax({
				url: "aksi/php/userhotspot/hapus.php",
				type:"POST",						
				data: {aksi:"hapussuser"},
				dataType:"json",
				chache: false,
				success : function(respon){
				if (respon==1){
					location.reload();
				} else {
					$jnoc("#lprosesh").hide();
					$jnoc('.error-text').text("ada kesalahan saat proses hapus. cobalah beberapa saat lagi!"); 
					exit();	
				}
				}
			});
	});
	
	// Clear Counter
	$jnoc(".resetc").click(function(){
		$jnoc("#lprosesh").hide();
		$jnoc("#hapus").hide();
		$jnoc("#hapuss").hide();
		$jnoc("#cc").hide();
		$jnoc('.error-text').text("anda yakin akan menghapus counter user hotspot? jika anda menghapus counter, user yg sudah sampai limit waktu dapat login kembali"); 
		$jnoc("#resetc").show(); 		
		$jnoc("#myModal").modal("show");	
	});
	
	$jnoc("#resetc").click(function(){
		$jnoc("#lprosesh").show();
			$jnoc.ajax({
				url: "aksi/php/userhotspot/hapus.php",
				type:"POST",						
				data: {aksi:"resetc"},
				dataType:"json",
				chache: false,
				success : function(respon){
				if (respon==1){
					location.reload();
				} else {
					$jnoc("#lprosesh").hide();
					$jnoc('.error-text').text("ada kesalahan saat proses Reset Counter. cobalah beberapa saat lagi!"); 
					exit();	
				}
				}
			});
	});
	// Cetak PDF 
	$jnoc(".cetak").click(function(){
		$jnoc("#lprosese").show();
			$jnoc.ajax({
				url: "aksi/php/userhotspot/cek_data.php",
				type:"POST",						
				data: {aksi:"export"},
				dataType:"json",
				chache: false,
				success : function(respon){
				if (respon==1){
					var win = window.open('penting/pdf_export.php', '_blank');
					if(win){
					win.focus();
					}else{
					document.getElementById("popup").click();
					}
				} else {
					$jnoc("#lprosese").hide();
					$jnoc("#lprosesh").hide();
					$jnoc("#hapus").hide();
					$jnoc("#hapuss").hide();
					$jnoc("#resetc").hide();
					$jnoc("#cc").hide();
					$jnoc('.error-text').text("ada kesalahan saat proses export. cobalah beberapa saat lagi");  		
					$jnoc("#myModal").modal("show");
				}
				}
			});
	});
	// Export Excel
	$jnoc(".export").click(function(){
		$jnoc("#lprosese").show();
			$jnoc.ajax({
				url: "aksi/php/userhotspot/cek_data.php",
				type:"POST",						
				data: {aksi:"export"},
				dataType:"json",
				chache: false,
				success : function(respon){
				if (respon==1){
					var win = window.open('penting/excel_export.php', '_blank');
					if(win){
					win.focus();
					}else{
					document.getElementById("popup").click();
					}
				} else {
					$jnoc("#lprosese").hide();
					$jnoc("#lprosesh").hide();
					$jnoc("#hapus").hide();
					$jnoc("#hapuss").hide();
					$jnoc("#resetc").hide();
					$jnoc("#cc").hide();
					$jnoc('.error-text').text("ada kesalahan saat proses export. cobalah beberapa saat lagi");  		
					$jnoc("#myModal").modal("show");
				}
				}
			});
	});
	// Clear Counter
	$jnoc(".ccounter").click(function(){
		$jnoc("#lprosesh").hide();
		$jnoc("#hapus").hide();
		$jnoc("#resetc").hide();
		$jnoc("#hapuss").hide();
		var isi = $jnoc(this);
		var id = isi.attr("id");
		var nama = isi.attr("svn");
		$jnoc('.error-text').text("anda yakin akan mereset counter user '"+nama+"' ini? jika anda menghapus counter, user dapat login kembali jika limit waktu telah habis"); 
		$jnoc("#cc").show(); 
		$jnoc("#idc").val(id);  
		$jnoc("#myModal").modal("show");
	});
	
	$jnoc("#cc").click(function(){
		$jnoc("#lprosesh").show();
		    var idh = $jnoc("#idc").val();
			$jnoc.ajax({
				url: "aksi/php/userhotspot/hapus.php",
				type:"POST",						
				data: {aksi:"cc",idh:idh},
				dataType:"json",
				chache: false,
				success : function(respon){
				if (respon==1){
					location.reload();
				} else {
					$jnoc("#lprosesh").hide();
					$jnoc('.error-text').text("ada kesalahan saat proses Reset Counter. cobalah beberapa saat lagi!"); 
					exit();	
				}
				}
			});
	});
});