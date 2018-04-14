<?php 
	$API->write("/ip/hotspot/active/print");   
	$a = $API->read(); 
?>
<div class="span9">
            <h3 class="page-title">Daftar User Hotspot Sedang Aktif</h3>

<div class="well">
<?php if (count($a)>=1) {?>
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama User</th>
          <th>Address</th>
          <th>UpTime</th>
          <th>Mac-Address</th>
          <th>Login-Menggunakan</th>
        </tr>
      </thead>
      <tbody>
		<?php 	
		$i=1;
		foreach($a as $tampil){ ?>	  
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $tampil['user']; ?></td>
          <td><?php echo $tampil['address']; ?></td>
          <td><?php echo $tampil['uptime']; ?></td>
          <td><?php echo $tampil['mac-address']; ?></td>
          <td><?php echo $tampil['login-by']; ?></td>
        </tr>
		<?php 
			$i++;
			} 
		$API->disconnect();   
		?>
      </tbody>
    </table>
	<?php } else {echo "<b style='color:red'>Tidak ada user hotspot yang sedang aktif <a href='index.php' title='Klik Untuk Kembali ke Halaman Utama'>Kembali</a></b>";} ?>
</div>

</div>
