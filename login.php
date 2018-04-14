<?php 
	ini_set( "display_errors", 0); 
	session_start();
	// Cek Login
	if (isset($_SESSION['user'])){
		header("location:index.php");
	} else {	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Halaman Login | Aplikasi Generate User Hotspot Mikrotik</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">
    <script src="lib/jquery-1.8.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="lib/jquery.validate.min.js"></script>
    <link rel="shortcut icon" href="images/logo_mikrotik.png">
 </head>

  <body> 
	<script>var $jnoc = jQuery.noConflict();</script>
    
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="#"><span class="first">Aplikasi Generate User Hotspot</span> <span class="second">Mikrotik</span></a>
            </div>
        </div>
    </div>
    

    <div class="container-fluid">
        
        <div class="row-fluid">
    <div class="dialog span4">
        <div class="block">
            <div class="block-heading">Silahkan Login</div>
            <div class="block-body">
			
                <form method="post" action="" id="loginform">
				
					<label>Ip Address</label>
                    <input type="text" id="ip" name="ip" class="required span12">
                    <label>Username</label>
                    <input type="text" id="user" name="user" class="required span12">
                    <label>Password</label>
                    <input type="password" id="pass" name="pass" class="span12">
					
					<img src="images/loading.gif" id="lproses" class="load pull-right" style="padding-top:5px">
					<input type="submit" name="submit" value="Login" id="masuk" class="btn btn-primary pull-right"/>
					
                    <a href="#myModal" role="button" data-toggle="modal" id="login" class="btn load btn-primary pull-right">Login</a>      
					<div class="clearfix"></div>
                </form>
				
            </div>
        </div>

    </div>
</div>

    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script src="aksi/js/login/aksi_login.js"></script>
    
	<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Perhatian</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"></p>
    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
    </div>
</div>

  </body>
</html>

<?php } ?>

