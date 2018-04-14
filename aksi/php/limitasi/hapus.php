<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="hapus"){
	
	$id = $_POST['idh'];
	
	$API->write("/ip/hotspot/user/profile/remove",false);	
	$API->write("=.id=".$id,true);

	$API->read();
	
	echo "1";
	
	} 

?>
