<style type="text/css">

body {
	font-family:arial;	
	font-size:12px;
	height:600;
	width:400;
}
.cleaner_h20 { clear: both; width:100%; height: 20px; }
.style4 {
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	color: #000000;
	font-size: 14px;
	font-weight: bold;
}
.style3 {
	font-family: times new roman;
	font-size: 22px;
	font-weight: bold;
	color: #000000;
}

</style>
<body>
<tr>
  <td><center class="style3">Fasilitas-Fasilitas Yang Terdapat Pada Hotel Padang</center></td>
</tr>
<div class="cleaner_h20"></div>

<?php
  
 include_once "./Admin/fungsi_koneksi.php";
  
  
  $koneksi = koneksi_db();
  $sql  = "select * from dtimage";
  $aksi = mysql_query($sql,$koneksi);
  
  
  while($data = mysql_fetch_array($aksi)):?>
	 <tr>
     <td> <center class="style2"><?php echo $data['penulis']; ?></td>
      
       <center>
         <img src="Admin/image/<?php echo $data['nama_image']; ?>" width="450" height="450"/> 
       </center></td>
       <td>
      <td><center class="style2"><?php echo $data['keterangan']; ?></center></td>
      
      
      
      <td><center class="style2">Tanggal Di Upload	:: <?php echo $data['tanggal']; ?></center></td>
</tr>
<div class="cleaner_h20"></div>
<div class="cleaner_h20"></div>
  <?php 
 
  endwhile;
  ?>
</table>
 </body>