<?php session_start();
    
	if ($_POST['aksi']=="login"){
	
	include("../../../penting/routeros_api.php");

	$API = new routeros_api();
	 
	$ip = $_POST['ip'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
 
	if (!$API->connect($ip, $user, $pass)){
		
		echo "0";
		
	} else {	
	$_SESSION['user']=$user;
	$konek = 'koneksi.php';
	$handle = fopen("../../../penting/".$konek, 'w') or die('Tidak Bisa Membuka File '.$konek);
	$data = '
	<?php 
		 include("routeros_api.php");
		 $API = new routeros_api();
		 if (!$API->connect("'.$ip.'","'.$user.'","'.$pass.'")){
			 unset($_SESSION["'.'user'.'"]);
			 header("location:login.php");
		 }
	?>';
	fwrite($handle, $data);
	fclose($handle);	
	
	echo "1";
	
	}
	
	}

?>
