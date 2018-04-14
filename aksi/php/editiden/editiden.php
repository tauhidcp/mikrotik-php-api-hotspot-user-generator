<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="editiden"){
	
	$iden = $_POST['iden'];
	
	$API->write("/system/identity/set",false);	
	$API->write("=name=".$iden,true);

	$API->read();
	
	echo "1";
	
	}

?>
