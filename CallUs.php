
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.style3 {
	font-family: times new roman;
	font-size: 26px;
	font-weight: bold;
	color: #000000;
}

</style>

<center class="style3"><align="center">Kontak Informasi</center>
		
		<p></p>
        <p><em>Jika Anda Ingin Mengajukan pertanyaan Sehubungan dengan Website ini dan Hotel Padang ini Bisa Dengan Menghubungi Alamat Di Bawah Ini atau Isi Kolum Di Bawah ini...  Terima Kasih .</em></p>
       
        <div class="cleaner_h40"></div>
        
            
            <div class="two_column_ws float_l">
            
           		<h6> Alamat Hotel Padang</h6>
                Hotel Padang, <br />
                Jln. Bagindo Aziz Chan No.28, <br />
                Padang.<br />
                Telp  : 0751-31383 / 37402<br />
				Fax   : 0751-35962<br />
				Email : padang.hotel@yahoo.com
                
          </div>
                
            <div class="two_column_ws float_r">
           
                <h6> Administrator</h6>
                Irfan Aryadeni, <br />
                Alamat  : Jl. Underground No.007 London <br />
                United Kingdom.<br />
                Telp  : 021250000 <br />
				Email : irfanaryadeni@ymail.com 
                
          </div>
        
        
            <div class="cleaner_h50"></div>
            
            	<div id="contact_form">
                
<form name="form1" method="post" action="simpan_coment.php">
  <table width="500" border="0" cellspacing="2" cellpadding="0" class="keliling">
    <tr bgcolor="#00CCFF"> 
      <td colspan="2" bgcolor="FF9900" align="center"><b> TINGALKAN PESAN ANDA DI SINI </b></td>
    </tr>
	
  
 
   
    <tr> 
      <td align="right">Nama   : </td>
      <td><input name="txtnama" type="text" size="35" maxlength="150"></td>
    </tr>
    
    <tr> 
      <td align="right">Email  : </td>
      <td><input name="txtemail" type="text" size="35" maxlength="40"></td>
    </tr>
    <tr> 
      <td align="right">No Telfon  : </td>
      <td><input name="txttelp" type="text" size="35" maxlength="40"></td>
    </tr>
	 
	 <tr> 
      <td align="right">Pesan/Koment : </td>
      <td><textarea name="txtcoment" cols="35" rows="4" id="head"></textarea></td>
    </tr>
    
	 <tr>

 
    <tr> 
      <td>&nbsp;</td>
      <td><input name="TbSimpan" type="submit" value="Send">
      <input name="reset" type="reset" value="Reset"></td>
    </tr>
  </table>

<?php
  include ("koneksi.php");
  ?>
  <?php
  $sql = "SELECT * FROM pesan  ";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  
  {
  ?>
 
<p>
<li><td><span class="style22"><strong>Pengirim </strong>	:</span><?php echo $data['nama']; ?></td>
</li>



<li><td><span class="style22"><strong>Pesan</strong>			:</span><?php echo $data['coment']; ?></td>
</li>
    <div class="cleaner_h10"></div>
</p>
  <?php
  }
  ?>
            </div>