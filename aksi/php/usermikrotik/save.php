<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="save"){
	
	$pass = $_POST['pass'];
	$nama = $_POST['nama'];
	$group = $_POST['group'];
	$ket = $_POST['ket'];
	
	$API->write("/user/add",false);	
	$API->write("=name=".$nama,false);	
	$API->write("=group=".$group,false);	
	$API->write("=comment=".$ket,false);	
	$API->write("=password=".$pass,true);

	$API->read();
	
	echo "1";
	
	} 

?>
