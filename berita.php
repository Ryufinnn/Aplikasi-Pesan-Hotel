<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOTEL PADANG</title>
<link href="images/global.png" rel="shorcut icon">
<meta name="keywords" content="mighty template, free css template" />
<meta name="description" content="Mighty is a free CSS template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="content_slider_style.css" />
<script type="text/javascript" src="js/jquery.1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 4000, true);
	});
</script>

<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 16px;
}
-->
</style>
</head>
<body> 

<div id="templatemo_wrapper">

	<div id="templatemo_header">
    
    	<div id="header_left">
    	
            <div id="site_title">
            
                <a href="index.php" target="_parent"><span></span></a>            </div>

	  </div>
        
        <div id="header_right">
        
        	<ul id="social_box">
            	<li><a href="http://www.facebook.com" target="_parent"><img src="images/facebook.png" alt="facebook" /></a></li>
                <li><a href="http://www.twitter.com"><img src="images/twitter.png" alt="twitter" /></a></li>
                <li><a href="http://www.linkedin.com"><img src="images/linkedin.png" alt="linkin" /></a></li>
                <li><a href="http://www.flickr.com"><img src="images/flickr.png" alt="flickr" /></a></li>
                <li><a href="http://www.myspace.com/templatemo"><img src="images/myspace.png" alt="myspace" /></a></li>                
            </ul>
            
                
            <div id="templatemo_menu">
            
                <ul>
                <li><a href="index.php">START HERE<span>Home</span></a></li>
                <li><a href="index.php?page=Profil">PROFIL<span>Hotel</span></a></li>
                <li><a href="?page=News" <?php if($_GET[page]=="News") { echo "class='selected'"; } ?>>LATEST NEWS<span>Updates</span></a></li>
                <li><a href="index.php?page=Fasilitas">FASILITAS<span>Hotel</span></a></li>
                <li><a href="index.php?page=Galery">MORE<span>Galery</span></a></li>
                <li><a href="index.php?page=Call">CALL<span>Us</span></a></li>
                <li><a href="index.php?page=Login">ADMIN<span>Login</span></a></li>
                </ul>    	
            
            </div>
            
		</div>
                
    </div> <!-- end of templatemo_header -->
    
  <div id="featured">
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="images/depan1.jpg" alt="thumbnail 01" width="79" height="48" /><span>HOTEL PADANG is a Great Hotel</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/depan.jpg" alt="thumbnail 01" width="79" height="48" /><span>Tampak Depan Hotel Padang </span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/lobby.jpg" alt="thumbnail 01" width="79" height="48" /><span>Lobby Hotel Padang</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/kamar.jpg" alt="thumbnail 01" width="79" height="48" /><span>Rooms </span></a></li>
	      </ul>

	    <!-- First Content -->
      <div id="fragment-1" class="ui-tabs-panel">
        <img src="images/depan1.jpg" alt="01" width="652" height="253" />
        <div class="info">
		  <h2><a href="http://www.templatemo.com/page/1" target="_parent">HOTEL PADANG is a Great Hotel</a></h2>
		  <p>Hotel Padang merupakan salah satu Hotel yang berada di Padang, Sumatera Barat <a href="#" > read more...</a></p>
	    </div>
    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
				<img src="images/depan.jpg" alt="01" width="652" height="253" />
			 <div class="info">
				<h2><a href="http://www.templatemo.com/page/2" target="_parent">Hotel Padang </a></h2>
				<p>Bangunan Hotel Padang ber asitektur kan bangunan zaman belanda kuno. Tetapi masih kokoh seperti dahulu. <a href="#" >read more...</a></p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
				<img src="images/lobby.jpg" alt="01" width="652" height="253" />
			 <div class="info">
				<h2><a href="http://www.templatemo.com/page/3" target="_parent">Lobby</a></h2>
				<p>Lobby Hotel Padang sangat kental akan arsitek kuno Belanda. <a href="#">read more...</a></p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
				<img src="images/kamar.jpg" alt="01" width="652" height="253" />
			 <div class="info">
				<h2><a href="http://www.templatemo.com/page/4" target="_parent">Rooms</a></h2>
				<p>Berbagai macam kamar yang disediakan oleh Hotel Padang mulai dari yang Deluxe Room, Family Room, dan Standard Room. <a href="#" >read more...</a></p>
	         </div>
    </div>
<?php
  include ("koneksi.php");
  ?>
  <?php
  $sql = "SELECT * FROM trading ";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  
  {
  ?>
 
  <p>
   <p><marquee direction="left" height="100" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
   <span class="style6"> <li>  <td><?php echo $data['isi']; ?></li></li>
   </span>
   </marquee>
</p>
  <?php
  }
  ?>

  </div>
    
    
    
    <div id="content_wrapper">
    	
        <div id="content">
        <h4>UPDATE BERITA HOTEL PADANG</h4>
         <?PHP
switch($_GET[act]){
default :
include'koneksi.php';
$Query = mysql_query("Select * from berita order by idberita");
while($tampil=mysql_fetch_array($Query)){
echo "<font color=red size=+2>$tampil[judul]</font><br>";
echo "<font color=black>posted by : $tampil[penulis] At : $tampil[tanggal]</font>";
echo "<p class=gaya>".substr($tampil[isi],0,200)." ......";
echo "<a href=?berita1.php&act=Selanjutnya&data=$tampil[idberita]><br>(Read More)</a></p>";

}
case 'Selanjutnya':
if(isset($_GET['data'])){
$dataId=$_GET['data'];
include'koneksi.php';
$tampilinsemuanya = mysql_query("SELECT * FROM berita WHERE idberita='$dataId' ORDER
by idberita asc");
if($tampildong = mysql_fetch_array( $tampilinsemuanya )){
echo "<font color=red size=+2> $tampildong[judul]</font><br>";
echo "posted by : $tampildong[penulis] At : $tampildong[tanggal]";
echo "<p class=gaya>$tampildong[isi]</p>";
echo "<font color=red><p class=gaya><b>Padang   :$tampildong[tanggal]</font></b></p>";

}
}
}
?>

    
               <div class="cleaner"></div>           
        </div>
       
<div id="sidebar">
       
       			
       <h3 align="center">All About Hotel Padang</h3>
				<ul class="templatemo_list">
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Restaurant/Service</a></li>
                    <li><a href="#">Profil Hotel</a></li>
                    <li><a href="#">Fasilitas</a></li>
                </ul>
                <h2>Trading Topic</h2>
                
                <ul class="templatemo_list">
  
  <?php
  include ("koneksi.php");
  ?>
  
  <?php
  $sql = "SELECT * FROM trading limit 1 ";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  
  {
  ?>
 
  <p>
   <p><marquee direction="up" height="100" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();">
   <span class="style6"> <li>  <td><?php echo $data['isi']; ?></li></li>
   </span>
   </marquee>
</p>
  <?php
  }
  ?>
      </ul>
                
      <div class="button"><a href="?page=News" <?php if($_GET[page]=="News") { echo "class='selected'"; } ?>>Update News</a></div>
                
                <div class="horizon_divider style1">
               <?php
  include ("koneksi.php");
  ?>
  <?php
  $sql = "SELECT * FROM berita ORDER by tanggal DESC limit 5 ";
  $qry = mysql_query($sql);
  while ($data = mysql_fetch_array($qry)) 
  
  {
  ?>
 
  <p>
    <li><td><blink><span class="style22"></span><?php echo $data['judul']; ?></blink></td></li>
</p>
  <?php
  }
  ?>
  	

                
     </div>
                <div class="button"><a href="?page=Galery" <?php if($_GET[page]=="News") { echo "class='selected'"; } ?>>Galery Update</a></div>
            
            	<div class="sb_news_box">
                	
                    <?php
  
 include_once "./Admin/fungsi_koneksi.php";
  
  
  $koneksi = koneksi_db();
  $sql  = "select * from galery ORDER by tanggal DESC limit 12 ";
  $aksi = mysql_query($sql,$koneksi);
  
  
  while($data = mysql_fetch_array($aksi)):?>
 
	 <tr>
      
      <td>
       
         <td><a href="Admin/image/<?=$data['nama_image'];?>"><img src="Admin/image/<?php echo $data['nama_image']; ?>" width="79" height="48"/> 
       
       
      </td>
      
      
     </tr>
     
  <?php 
 
  endwhile;
  ?>
  
  </table>
  <div class="cleaner"></div>
                    <div class="cleaner"></div>
                    
      </div>
      <div class="button"><a href="?page=Galery" <?php if($_GET[page]=="News") { echo "class='selected'"; } ?>>Fasilitas Update</a></div>
      <div class="sb_news_box">
                	
                    <?php
  
 include_once "./Admin/fungsi_koneksi.php";
  
  
  $koneksi = koneksi_db();
  $sql  = "select * from dtimage ORDER by tanggal DESC limit 3";
  $aksi = mysql_query($sql,$koneksi);
  
  
  while($data = mysql_fetch_array($aksi)):?>
 
	 <tr>
      
      <td>
       <center>
         <a href="Admin/image/<?=$data['nama_image'];?>"><img src="Admin/image/<?php echo $data['nama_image']; ?>" width="79" height="48"/> 
       </center>
       
      </td>
      <div class="nb_right">
      <td><?php echo $data['keterangan']; ?></td>
      
      </div>
      <div class="cleaner"></div>
     </tr>
     
  <?php 
 
  endwhile;
  ?>
  
  </table>
  <div class="cleaner"></div>
                    <div class="cleaner"></div>
                    
      </div>
                
                
                
                <div class="button float_r"><a href="#">View All</a></div>
        
      </div>
    
    </div>
    
    <div class="horizon_divider"></div>
    
    <div id="templatemo_footer">

        <p class="copyright">Hotel Padang&copy;. All rights reserved.</p>
	<p class="design">Designed By: <a href="http://www.irfanaryadeni.com/" target="_blank" class="link">Irfan Aryadeni</a></p>
    
    </div>

</div> <!-- end of template wrapper -->

</body>
</html>





