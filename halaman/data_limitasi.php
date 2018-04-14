<?php 
	$API->write("/ip/hotspot/user/profile/print");   
	$g = $API->read(); 
?>
<div class="span9">
            <h3 class="page-title">Daftar Group Limitasi Bandwidth Hotspot</h3>

<div class="well">
<?php if (count($g)>=1) {?>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Group</th>
          <th>Jml Pengguna (Shared User)</th>
          <th>Rate Limit (Rx/Tx)</th>
          <th style="width: 26px;">Aksi</th>
        </tr>
      </thead>
      <tbody>
		<?php 	
		$i=1;
		foreach($g as $tampil){ ?>	  
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $tampil['name']; ?></td>
          <td><?php echo $tampil['shared-users']; ?></td>
          <td><?php echo $tampil['rate-limit']; ?></td>
          <td>
              <a href="index.php?halaman=edit_group_limitasi&id=<?php echo $tampil['.id']; ?>"><i class="icon-pencil"></i></a>
              <a href="#" id="<?php echo $tampil['.id']; ?>" svn="<?php echo $tampil['name']; ?>" class="hapus" role="button" data-toggle="modal"><i class="icon-trash"></i></a>
          </td>
        </tr>
       	<?php 
			$i++;
			} 
		$API->disconnect();   
		?>
      </tbody>
    </table>
	<?php } else {echo "<b style='color:red'>Data Group Limitasi Bandwidth Hotspot Tidak ada <a href='index.php' title='Klik Untuk Kembali ke Halaman Utama'>Kembali</a></b>";} ?>
</div>

</div>

<script src="aksi/js/limitasi/hapus.js"></script>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Konfirmasi</h3>
    </div>
    <div class="modal-body">
		<input type="hidden" id="idnya" name="idnya"/>
        <p class="error-text"></p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
        <button class="btn btn-danger" id="hapus">Hapus!</button>
		<img src="images/loading.gif" id="lproses" class="load"/>
    </div>
</div>
