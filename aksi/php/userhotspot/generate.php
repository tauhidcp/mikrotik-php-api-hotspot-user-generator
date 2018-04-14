<?php
    require_once("../../../penting/koneksi.php");
	
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);

    $randomUser = '';
    $randomPass = '';
 
	if ($_POST['aksi']=="generate"){
	
	$ppass = $_POST['ppass'];
	$puser = $_POST['puser'];
	$glimit = $_POST['glimit'];
	$lwaktu = $_POST['lwaktu'];
	$satuan = $_POST['satuan'];
	$ket = $_POST['ket'];
	$juser = $_POST['juser'];
	
	if ($satuan=="menit"){
			
		$uptime ="00:".$lwaktu.":00";
		
	} else if ($satuan=="jam"){
		
		$uptime = $lwaktu.":00:00";
		
	} else if ($satuan=="hari"){
		
		$total = $lwaktu*24;
		
		$uptime = $total.":00:00";
	}
	 
	// Generate User Hotspot Secara Random
	
	// For Jumlah
	for ($j = 0; $j < $juser; $j++) {
  
	   // For Random Username
	   for ($i = 0; $i < $puser; $i++) {
		$randomUser .= $characters[rand(0, $charactersLength - 1)];
	   }
   
	   // For Random Password
	   for ($k = 0; $k < $ppass; $k++) {
		$randomPass .= $characters[rand(0, $charactersLength - 1)];
	   }
  
	  $API->write("/ip/hotspot/user/add",false);	
	  $API->write("=name=".$randomUser,false);	
	  $API->write("=password=".$randomPass,false);	
	  $API->write("=profile=".$glimit,false);	
	  $API->write("=limit-uptime=".$uptime,false);		
	  $API->write("=comment=".$ket,true);	
	  $API->read();
	  
	  $randomUser = '';
	  $randomPass = '';
  
	}
	
	echo "1";
	
	}
?>
