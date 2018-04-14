<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="update"){
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$group = $_POST['group'];
	$ket = $_POST['ket'];
	
	$API->write("/user/set",false);	
	$API->write("=name=".$nama,false);	
	$API->write("=group=".$group,false);	
	$API->write("=comment=".$ket,false);	
	$API->write("=.id=".$id,true);

	$API->read();
	
	echo "1";
	
	}

?>
