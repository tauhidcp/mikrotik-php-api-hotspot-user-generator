<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="editpass"){
	
	$passl = $_POST['passl'];
	$passb = $_POST['passb'];
	
	$API->write("/password",false);	
	$API->write("=old-password=".$passl,false);	
	$API->write("=new-password=".$passb,false);	
	$API->write("=confirm-new-password=".$passb,true);

	$API->read();
	
	echo "1";
	
	}

?>
