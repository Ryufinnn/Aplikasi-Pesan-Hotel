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

<?php
//Koneksi Ke Server Database
 include_once "../library/koneksi.php";
 include_once "../library/librari.php";
?><form name="form1" method="post" action="SimpanBerita.php">
  <table width="500" border="0" cellspacing="2" cellpadding="0" class="keliling">
    <tr bgcolor="#00CCFF"> 
      <td colspan="2" bgcolor="FF9900" align="center"><b> ENTRY DATA BERITA </b></td>
    </tr>
	<tr> 
      <td align="right">Id Berita   : </td>
      <td><input name="TxtId" type="text" size="20" maxlength="150"></td>
    </tr>
    <tr>
      <td align="right">Tanggal Berita : </td>
      <td><input id="tanggal" type="text" name="tanggal">
    </tr>
 
   
    <tr> 
      <td align="right">Judul Berita   : </td>
      <td><input name="TxtJdl" type="text" size="55" maxlength="150"></td>
    </tr>
	 
	 <tr> 
      <td align="right">Keterangan Berita : </td>
      <td><textarea name="TxtIsi" cols="45" rows="15" id="head"></textarea></td>
    </tr>
    
	 <tr>


<tr> 
      <td align="right">Penulis  : </td>
      <td><input name="TxPenulis" type="text" size="45" maxlength="40"></td>
    </tr>
	 
    <tr> 
      <td>&nbsp;</td>
      <td><input name="TbSimpan" type="submit" value="Simpan">
      <input name="reset" type="reset" value="Cancel"></td>
    </tr>
  </table>
  
<br>
 
  </br>

  <?php
  include_once "../library/koneksi.php";
  include_once "../library/librari.php";
?>
<table width="500" border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
  <tr> 
    <td colspan="7" bgcolor="#FF9900"><center><b>Daftar Berita</b></center></td>
  </tr>
  <tr> 
    <td width="15" align="center" bgcolor="#CCFF99"><b>No.</b></td>
    <td width="100" align="center" bgcolor="#CCFF99"><strong>No Id Berita </strong></td>
	<td width="100" align="center" bgcolor="#CCFF99"><strong>Tangal Posting </strong></td>
    <td width="500" align="center" bgcolor="#CCFF99"><b>Judul Berita </b></td>
  
	<td width="143" align="center" bgcolor="#CCFF99"><b>Penulis</b></td>
	<td width="350" align="center" bgcolor="#CCFF99"><b>Aksi</b></td>
  </tr>
  
  <?php
 
  $sql = "SELECT * FROM berita ORDER BY idberita";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  {
  	$no++;
  ?>
  <tr bgcolor="#FFFFF"> 
    <td><?php echo $no;?></td> 
    <td><?php echo $data['idberita']; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
	<td><?php echo $data['judul']; ?></td>
	
	<td><?php echo $data['penulis']; ?></td>

    <td align="center"> 
	  
      <a href="HapusBerita.php?kdhapus=<?php echo $data['idberita'];?>" onClick="return confirm ('Anda yakin akan menghapus data dengan Kode ?<?php echo $data['idberita'];?>')">Del</b></a> |
     
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</html>
