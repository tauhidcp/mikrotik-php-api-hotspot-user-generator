<?php 	$API->write("/ip/hotspot/user/profile/print");   
	    $glimit = $API->read(); 
?>
<div class="span9">
       <h3 class="page-title">Generate User Hotspot</h3>

<div class="well">

    <form id="guserhotspot" method="post" action="">
        
		<label>Panjang Nama User</label>
        <select name="puser" id="puser" class="input-large required warna">
			<option value="">-- Pilih --</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>	
		<i style="color:green">*) panjang string username</i>
        <label>Panjang Password</label>
        <select name="ppass" id="ppass" class="input-large required warna">
			<option value="">-- Pilih --</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>	
		<i style="color:green">*) panjang string password</i>
        <label>Group Limitasi Bandwidth</label>
        <select name="glimit" id="glimit" class="input-large required warna">
			<option value="">-- Pilih --</option>
			<?php 
				foreach($glimit as $g){
					?>
			<option value="<?php echo $g['name'];?>"><?php echo $g['name']." (".$g['rate-limit'].")"; ?></option>
			<?php } ?>
		</select>
        <label>Limit Waktu</label>
        <input type="text" id="lwaktu" name="lwaktu" class="input-large required">
		<select name="satuan" id="satuan" class="input-large required warna">
			<option value="">-- Pilih --</option>
			<option value="menit">Menit</option>
			<option value="jam">Jam</option>
			<option value="hari">Hari</option>
		</select>
		<label>Jumlah User</label>
        <select name="juser" id="juser" class="input-large required warna">
			<option value="">-- Pilih --</option>
			<option value="5">5 Buah</option>
			<option value="10">10 Buah</option>
			<option value="20">20 Buah</option>
			<option value="25">25 Buah</option>
			<option value="50">50 Buah</option>
			<option value="75">75 Buah</option>
			<option value="100">100 Buah</option>
			<option value="200">200 Buah</option>
			<option value="250">250 Buah</option>
			<option value="300">300 Buah</option>
			<option value="500">500 Buah</option>
			<option value="1000">1000 Buah</option>
		</select>	
		<i style="color:green">*) jumlah user yang akan digenerate</i>
		<label>Keterangan</label>
        <textarea id="ket" rows="2" class="required" name="ket"></textarea>
		
        <div style="padding-top:20px">
            <input class="btn btn-primary" id="simpan" type="submit" value="Generate User Hotspot">
			<img src="images/loading.gif" class="load" id="lproses"/>
			<button class="btn"><a href="index.php?halaman=daftar_user_hotspot" style="color:black">Kembali</a></button>
		</div>
	</form>
      </div>
  </div>

  <script src="aksi/js/userhotspot/generate.js"></script>
  
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

   