<?php
    require_once("../../../penting/koneksi.php");
	
	if ($_POST['aksi']=="hapus"){
	
	$id = $_POST['idh'];
	
	$API->write("/ip/hotspot/user/remove",false);	
	$API->write("=.id=".$id,true);

	$API->read();
	
	echo "1";
	
	} 
	
	if ($_POST['aksi']=="cc"){
	
	$id = $_POST['idh'];
	
	$API->write("/ip/hotspot/user/reset-counters",false);	
	$API->write("=.id=".$id,true);

	$API->read();
	
	echo "1";
	
	} 

	if ($_POST['aksi']=="resetc"){
	
	$API->write("/ip/hotspot/user/reset-counters");	

	$API->read();
	
	echo "1";
	
	}
	
	if ($_POST['aksi']=="hapussuser"){
	
	$API->write("/ip/hotspot/user/print");   
	$uh = $API->read();
	
	if (count($uh)>500){	
        $j=1;	
		foreach($uh as $tampil){
		$API->write("/ip/hotspot/user/remove",false);	
		$API->write("=.id=".$tampil['.id'],true);
		$API->read();
		if ($j == 500){ break; }
		$j++;
		}
		
		echo "1";
		
	} else {
		foreach($uh as $tampil){
		$API->write("/ip/hotspot/user/remove",false);	
		$API->write("=.id=".$tampil['.id'],true);
		$API->read();
		}
		
	   	echo "1";
	}
	
	} 

?>
