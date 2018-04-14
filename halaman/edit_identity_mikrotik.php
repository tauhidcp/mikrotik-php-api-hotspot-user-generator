	<?php   
	   $API->write("/system/identity/print");   
	   $id = $API->read(); 
	   foreach($id as $tampil){
		$iden = $tampil['name'];
	   }   
	?>
<div class="span9">
       <h3 class="page-title">Edit Identity Mikrotik</h3>
<div class="well">

    <form id="giden" action="" method="post">
	    <label>Identity</label>
        <input type="text" id="iden" value="<?php echo $iden; ?>" name="iden" class="input-xlarge required">
        <div>
		 <input class="btn btn-primary" type="submit" name="submit" value="Ganti">
			<img src="images/loading.gif" id="lproses" class="load"/>
			<button class="btn"><a href="index.php" style="color:black">Kembali</a></button>
        </div>
    </form>


</div>

<script src="aksi/js/editiden/editiden.js"></script>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close tutup" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Perhatian</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"></p>
  </div>
  <div class="modal-footer">
    <button class="btn tutup" data-dismiss="modal" aria-hidden="true">Tutup</button>
  </div>
</div>
   