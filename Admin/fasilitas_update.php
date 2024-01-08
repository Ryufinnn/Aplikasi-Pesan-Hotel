<style type="text/css">

body {
	font-family:arial;	
	font-size:12px;
	height:400;
	width:400;
}
</style>
<body>
					<?php
  
  include("fungsi_koneksi.php");
  
  
  $koneksi = koneksi_db();
  $sql  = "select * from dtimage";
  $aksi = mysql_query($sql,$koneksi);
  
  
  while($data = mysql_fetch_array($aksi)):?>
	 <tr>
      
      <td>
       <center>
         <img src="image/<?php echo $data['nama_image']; ?>" width="79" height="48"/> 
       </center>
      </td>
      
      
      <td><?php echo $data['keterangan']; ?></td>

      
     </tr>
  <?php 
 
  endwhile;
  ?>
  </table>
 </body>