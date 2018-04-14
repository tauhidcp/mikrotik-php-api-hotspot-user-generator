<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="export"){
	
	$API->write("/ip/hotspot/user/print");   
	$uh = $API->read();
	
	if (count($uh)>=1){
	
	echo "1";
	
	} else {
		
		echo "0";
	
	}
	
	} 

?>
