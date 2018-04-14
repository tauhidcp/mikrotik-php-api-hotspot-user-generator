<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="save"){
	
	$share = $_POST['share'];
	$nama = $_POST['nama'];
	$limit = $_POST['limit'];
	$satuan = $_POST['satuan'];
	$rate = $limit."".$satuan."/".$limit."".$satuan;
	
	$API->write("/ip/hotspot/user/profile/add",false);	
	$API->write("=name=".$nama,false);	
	$API->write("=shared-users=".$share,false);	
	$API->write("=rate-limit=".$rate,true);	

	$API->read();
	
	echo "1";
	
	} else if ($_POST['aksi']=="update"){
	
	$share = $_POST['share'];
	$nama = $_POST['nama'];
	$limit = $_POST['limit'];
	$satuan = $_POST['satuan'];
	$rate = $limit."".$satuan."/".$limit."".$satuan;
	$id = $_POST['id'];
	
	$API->write("/ip/hotspot/user/profile/set",false);	
	$API->write("=name=".$nama,false);	
	$API->write("=shared-users=".$share,false);	
	$API->write("=rate-limit=".$rate,false);		
	$API->write("=.id=".$id,true);

	$API->read();
	
	echo "1";
	
	}

?>
