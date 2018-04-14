<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="save"){
	
	$pass = $_POST['pass'];
	$user = $_POST['user'];
	$glimit = $_POST['glimit'];
	//$lwaktu = $_POST['lwaktu'];
	//$satuan = $_POST['satuan'];
	$ket = $_POST['ket'];
	
//	if ($satuan=="menit"){
			
//		$uptime ="00:".$lwaktu.":00";
		
//	} else if ($satuan=="jam"){
		
//		$uptime = $lwaktu.":00:00";
		
//	} else if ($satuan=="hari"){
		
//		$total = $lwaktu*24;
		
//		$uptime = $total.":00:00";
//	}
	 
	
	$API->write("/ip/hotspot/user/add",false);	
	$API->write("=name=".$user,false);	
	$API->write("=password=".$pass,false);	
	$API->write("=profile=".$glimit,false);	
//	$API->write("=limit-uptime=".$uptime,false);		
	$API->write("=comment=".$ket,true);	

	$API->read();
	
	echo "1";
	
	} else if ($_POST['aksi']=="update"){
	
	$pass = $_POST['pass'];
	$user = $_POST['user'];
	$glimit = $_POST['glimit'];
//	$lwaktu = $_POST['lwaktu'];
//	$satuan = $_POST['satuan'];
	$ket = $_POST['ket'];
	
//	if ($satuan=="menit"){
			
//		$uptime ="00:".$lwaktu.":00";
		
//	} else if ($satuan=="jam"){
		
//		$uptime = $lwaktu.":00:00";
		
//	} else if ($satuan=="hari"){
		
//		$total = $lwaktu*24;
		
//		$uptime = $total.":00:00";
//	}
	
	$id = $_POST['id'];
	
	$API->write("/ip/hotspot/user/set",false);	
	$API->write("=name=".$user,false);	
	$API->write("=password=".$pass,false);	
	$API->write("=profile=".$glimit,false);	
//	$API->write("=limit-uptime=".$uptime,false);		
	$API->write("=comment=".$ket,false);		
	$API->write("=.id=".$id,true);

	$API->read();
	
	echo "1";
	
	}

?>
