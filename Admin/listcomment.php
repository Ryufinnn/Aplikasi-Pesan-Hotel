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
  include_once "../library/koneksi.php";
  include_once "../library/librari.php";
?>
<table width="500" border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
  <tr> 
    <td colspan="7" bgcolor="#FF9900"><center><b>Daftar Comment</b></center></td>
  </tr>
  <tr> 
    <td width="15" align="center" bgcolor="#CCFF99"><b>No.</b></td>
    <td width="100" align="center" bgcolor="#CCFF99"><strong>Nama</strong></td>
	<td width="100" align="center" bgcolor="#CCFF99"><strong>Email </strong></td>
    <td width="100" align="center" bgcolor="#CCFF99"><b>Telp </b></td>
  
	<td width="400" align="center" bgcolor="#CCFF99"><b>Comment</b></td>
	<td width="350" align="center" bgcolor="#CCFF99"><b>Aksi</b></td>
  </tr>
  
  <?php
 
  $sql = "SELECT * FROM pesan ORDER BY nama";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  {
  	$no++;
  ?>
  <tr bgcolor="#FFFFF"> 
    <td><?php echo $no;?></td> 
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['email']; ?></td>
	<td><?php echo $data['telp']; ?></td>
	<td><?php echo $data['coment']; ?></td>
    <td align="center"> 
	  
      <a href="HapusComment.php?kdhapus=<?php echo $data['nama'];?>" onClick="return confirm ('Anda yakin akan menghapus data dengan Nama ?<?php echo $data['nama'];?>')">Del</b></a>
     
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</html>
