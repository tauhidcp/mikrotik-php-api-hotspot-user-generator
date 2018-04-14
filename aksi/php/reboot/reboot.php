<?php session_start();

    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="reboot"){
	
	$API->write("/system/reboot",true);	

	$API->read();
	
	unset($_SESSION['user']);
	
	echo "1";
	
	}

?>
