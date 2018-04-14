	<?php   
	   $API->write("/user/group/print");   
	   $g = $API->read(); 
	?>
<div class="span9">
       <h3 class="page-title">Tambah User Mikrotik</h3>
<div class="well">

    <form id="user" method="post" action="">
        <label>Nama User</label>
        <input type="text" id="nama" name="nama" class="input-xlarge required">
        <label>Group</label>
        <select name="group" id="group" class="input-large warna required">
			<option value="">-- Pilih --</option>
		<?php foreach($g as $tampil){ ?> 
			<option value="<?php echo $tampil['name'];?>"><?php echo $tampil['name']; ?></option>
		<?php } ?>
		</select>
        <label>Password</label>
        <input type="password" id="pass" name="pass" class="input-large required">
        <label>Keterangan</label>
        <textarea id="ket" name="ket" rows="3" class="required"></textarea>
		
        <div style="padding-top:20px">
           <input class="btn btn-primary" id="simpan" type="submit" value="Simpan User">
            <img src="images/loading.gif" id="lproses" class="load"/>
			<button class="btn"><a href="index.php?halaman=daftar_user_mikrotik" style="color:black">Kembali</a></button>
        </div>
	</form>
      </div>
  </div>

<script src="aksi/js/usermikrotik/save.js"></script>
  
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Perhatian</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"></p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
  </div>
</div>

   