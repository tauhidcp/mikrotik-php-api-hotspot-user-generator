<?php 
/* Proses Logout :
   Hapus Session User Lalu Arahkan ke Halaman Login
*/
session_start();
unset($_SESSION['user']);
header("location:login.php");
?>