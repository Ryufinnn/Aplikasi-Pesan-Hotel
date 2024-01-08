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
    <style type="text/css">

body {
	font-family:arial;	
	font-size:12px;
}


</style>
<body>
<?php
//Koneksi Ke Server Database
 include_once "../library/koneksi.php";
 include_once "../library/librari.php";
?><form name="form1" method="post" action="SimpanAgenda.php">
  <table width="500" border="0" cellspacing="2" cellpadding="0" class="keliling">
    <tr bgcolor="#FF9900"> 
      <td colspan="2" bgcolor="FF9900" align="center"><b> ENTRY TRADING TOPIC </b></td>
    </tr>
	<tr> 
      <td align="right">Id Trading   : </td>
      <td><input name="TxtId" type="text" size="20" maxlength="150"></td>
    </tr>
    <tr>
      <td align="right">Tanggal : </td>
      <td><input id="tanggal" type="text" name="tanggal">
    </tr>
 
   
    <tr> 
      <td align="right">Topic   : </td>
      <td><input name="TxtTopick" type="text" size="55" maxlength="500"></td>
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
    <td colspan="7" bgcolor="#FF9900"><center>
      <b>Daftar Trading Topic</b>
    </center></td>
  </tr>
  <tr> 
    
    <td width="100" align="center" bgcolor="#CCFF99"><strong>No Id Trading </strong></td>
	<td width="100" align="center" bgcolor="#CCFF99"><strong> Topic </strong></td>
    <td width="500" align="center" bgcolor="#CCFF99"><b>Tanggal </b></td>
    <td width="500" align="center" bgcolor="#CCFF99"><b>Aksi </b></td>
    
  </tr>
  
  <?php
 
  $sql = "SELECT * FROM trading ORDER BY id";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  {
  	$no++;
  ?>
  <tr bgcolor="#FFFFF"> 
    
    <td><?php echo $data['id']; ?></td>
	<td><?php echo $data['isi']; ?></td>
    <td><?php echo $data['tanggal']; ?></td>


    <td align="center"> 
	  
      <a href="HapusAgenda.php?kdhapus=<?php echo $data['id'];?>" onClick="return confirm ('Anda yakin akan menghapus data dengan Kode ?<?php echo $data['id'];?>')">Del</b></a> |
      </td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</html>
