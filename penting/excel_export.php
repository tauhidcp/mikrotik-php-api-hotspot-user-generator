<?php

  require_once("koneksi.php");
  
  function cariprofile($API,$namaprof){
		
		$API->write("/ip/hotspot/user/profile/print",false);   
		$API->write("?name=".$namaprof,true);   
		$p = $API->read(); 
	
		foreach($p as $tam){
		$nama = $tam['name'];
		$lm = $tam['rate-limit'];
		}
		
		$limitbw = $nama." (".$lm.")";	
		
		return $limitbw;
	}
	
  $API->write("/ip/hotspot/user/print");    
  $uh = $API->read();

  function cleanData(&$str){
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  $filename = "data_user_hotspot.xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  $no=1;
  
  foreach($uh as $row) {
	
    if(!$flag) {
      echo "No"."\t"."Nama User"."\t"."Password"."\t"."Limit Waktu"."\t"."Limit Bandwidth"."\n";
      $flag = true;
    }
	
	$limitbw = cariprofile($API,$row['profile']);
	
	echo "\t".$no."\t".$row['name']."\t".$row['password']."\t".$row['limit-uptime']."\t".$limitbw."\n";
	
	$no++;
  }

  exit;
?>
