
<?php
  include ("koneksi.php");
  ?>
  <?php
  $sql = "SELECT * FROM berita ORDER BY tanggal ASC ";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  
  {
  
  ?>

  <p>
  
    <br><td><strong><font color="#002B00" size="5"><?php echo $data['judul']; ?></td></br></font></strong>
	<br><td><strong>Tanggal	:</strong><?php echo $data['tanggal']; ?></td>
  </br>
	<br></br>
	<br><td><font color="#333333" ><?php echo $data['isi']; ?></td></br>
	<br><td><font color="#000000" ><div align="right"><strong>Di Tulis Oleh	:</strong><?php echo $data['penulis']; ?></div></td>
	</br>

    <td align="center">
</p>  

  <?php
  }
  ?>
