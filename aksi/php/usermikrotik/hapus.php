<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="hapus"){
	
	$id = $_POST['idh'];
	
	$API->write("/user/remove",false);	
	$API->write("=.id=".$id,true);

	$API->read();
	
	echo "1";
	
	} 

?>
