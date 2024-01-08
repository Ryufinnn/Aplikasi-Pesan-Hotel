<html>
<head>
<link type="text/css" href="js/themes/base/ui.all.css" rel="stylesheet" />   

    <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="js/ui/ui.core.js"></script>
    <script type="text/javascript" src="js/ui/ui.datepicker.js"></script>
    
    <script type="text/javascript" src="js/ui/i18n/ui.datepicker-id.js"></script>

    <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
					dateFormat  : 'yy-mm-dd',        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>
<script type="text/javascript">
function extCheck()
{
var elem= document.getElementById("file");
var re_text = /\.jpg|\.gif|\.png/i;
  if (elem.value.search(re_text) == -1)
    {
alert ("Maaf....FILE yang bisa diupload hanya bertipe *.Jpg/*.Gif/*.Png");       
  file.form.reset();
        return false;
    }
  else return true;
}
</script>


<title>Teknik Upload Gambar</title>
</head>
<form enctype="multipart/form-data" method="post" action="proses_upload.php">
<table width="500" border="0" cellspacing="2" cellpadding="0" class="keliling">
    <tr bgcolor="#FF9900"> 
      <td colspan="2" bgcolor="FF0000" align="center"><b> ENTRY FASILITAS </b></td>
    </tr>

 
 
    
    <tr> 
      <td align="right">Nama Fasilitas : </td>
      <td><input name="TxtPenulis" type="text" size="45" maxlength="40"></td>
    </tr>
    
    <tr>
      <td align="right">Tanggal : </td>
      <td><input id="tanggal" type="text"  name="tanggal">
    </tr>
    
 <tr><td align="right">Gambar : </td>
  <td colspan="2"><input type="file" name="irfan1"></td>
  <td></td>
 </tr>
  <tr> 
      <td align="right">Keterangan Fasilitas : </td>
      <td><textarea name="TxtKet" cols="45" rows="5"></textarea></td>
    </tr>
    	 

 <tr>
  <td><input type="submit" name="tombol" value="Upload !"></td><td><input type="reset" name="reset" value="Reset !"></td>
  </tr>
</table>
<?php
  
  include("fungsi_koneksi.php");
  
  
  ?>
<table width="600" border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
  <tr> 
    <td colspan="7" bgcolor="#FF9900"><center>
      <b>Daftar Fasilitas</b>
    </center></td>
  </tr>
  <tr> 
    
    <td width="100" align="center" bgcolor="#CCFF99"><strong>No Id Fasilitas </strong></td>
	<td width="100" align="center" bgcolor="#CCFF99"><strong>Tangal Di Posting </strong></td>
    <td width="500" align="center" bgcolor="#CCFF99"><b>File </b></td>
    <td width="800" align="center" bgcolor="#CCFF99"><b>Keterangan Fasilitas</b></td>
	<td width="143" align="center" bgcolor="#CCFF99"><b>Di Posting Oleh</b></td>
	<td width="350" align="center" bgcolor="#CCFF99"><b>Aksi</b></td>
  </tr>
  
  <?php
 
 $koneksi = koneksi_db();
  $sql  = "select * from dtimage";
  $aksi = mysql_query($sql,$koneksi);

  
  	$no++;
	 while($data = mysql_fetch_array($aksi)):
  ?>
  <tr bgcolor="#FFFFF"> 
     
    <td><?php echo $data['id_image']; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
	<td><img src="image/<?php echo $data['nama_image']; ?>" border="0" width="50" height="45"/> </td>
	<td><?php echo $data['keterangan']; ?></td>
	<td><?php echo $data['penulis']; ?></td>

    <td align="center"> 
	   
	  
      <a href="HapusFasilitas.php?kdhapus=<?php echo $data['id_image'];?>" onClick="return confirm ('Anda yakin akan menghapus data dengan Kode ?<?php echo $data['id_image'];?>')">Del</b></a> |
      </td>
  </tr>
  <?php 
  
  endwhile;
  ?>
</table>

<body>
</body>
</html>
