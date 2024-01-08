<script type="text/javascript" src="./library/jquery.js"></script>
<script type="text/javascript" src="./library/jquery.bigPicture.js"></script> 
<script type="text/javascript" src="./library/jquer.bigPicture-min.js"></script> 
<script type="text/javascript" src="./library/jquery.bigPicture-pack.js"></script> 
<script type="text/javascript" src="./library/jquery.easing.js"></script>  
<link rel="stylesheet" type="text/css" href="css/core.css"/>
<link rel="stylesheet" type="text/css" href="css/skin.css"/> 


<!--untuk slideshow-->
<link href="css/amazon_scroller.css" rel="stylesheet" type="text/css"></link>
<script type="text/javascript" src="library/amazon_scroller.js"></script>
<script language="javascript" type="text/javascript">

	$(function() {
		$("#amazon_scroller1").amazon_scroller({
			scroller_title_show: 'enable',
			scroller_time_interval: '4000',
			scroller_window_background_color: "#CCC",
			scroller_window_padding: '10',
			scroller_border_size: '1',
			scroller_border_color: '#000',
			scroller_images_width: '150',
			scroller_images_height: '100',
			scroller_title_size: '12',
			scroller_title_color: 'black',
			scroller_show_count: '3',
			directory: 'images'
		});
		$("#amazon_scroller2").amazon_scroller({
			scroller_title_show: 'disable',
			scroller_time_interval: '3000',
			scroller_window_background_color: "none",
			scroller_window_padding: '10',
			scroller_border_size: '0',
			scroller_border_color: '#CCC',
			scroller_images_width: '100',
			scroller_images_height: '80',
			scroller_title_size: '12',
			scroller_title_color: 'black',
			scroller_show_count: '3',
			directory: 'images'
		});
		$("#amazon_scroller3").amazon_scroller({
			scroller_title_show: 'enable',
			scroller_time_interval: '3000',
			scroller_window_background_color: "none",
			scroller_window_padding: '10',
			scroller_border_size: '2',
			scroller_border_color: '#9C6',
			scroller_images_width: '80',
			scroller_images_height: '60',
			scroller_title_size: '11',
			scroller_title_color: 'black',
			scroller_show_count: '3',
			directory: 'images'
		});
	});
</script>

<style type="text/css">

body {
	font-family:arial;	
	font-size:12px;
	height:600;
	width:400;
}
</style>



</head>
<title>Slideshow-Gallery-Ri32</title>
</head>
<body>
<div id="content">
   	<h2><marquee direction="left" scrollamount="50" behavior="slide">&raquo;Gallery Hotel Padang </marquee></h2>
	<p>&nbsp;</p>

	<div id="amazon_scroller1" class="amazon_scroller">
		<div class="amazon_scroller_mask">
		
			<ul>
			
			<?php
			include ("koneksi.php");
			$select=mysql_query("select * from galery");
			while($row=mysql_fetch_array($select)){
				?><li><a href="./Admin/image/<?php echo $row['nama_image'];?>" title="<?php echo $row['keterangan'];?>" class="info" name="gambar"><img src="Admin/image/<?php echo $row['nama_image'];?>" width="60" height="60" title="Klik photo"/></a></li>
				
				<?php	
				
      
      
      		
			}
			
			?>
		
			</ul>
			
		</div>
		<ul class="amazon_scroller_nav">
			<li></li>
			<li></li>
		</ul>
		<div style="clear: both"></div>
	</div>
	
	<p><i><font color="#666666" size="2" face="verdana">*Klik gambar untuk zoom</font></i></p>
	<img src="images/camera.jpg" /> 
    
    
    
</div>

<?php
include('photo1.php');

?>





<div class="sb_news_box">
                	
                    <?php
  
 include_once "./Admin/fungsi_koneksi.php";
  
  
  $koneksi = koneksi_db();
  $sql  = "select * from galery ORDER by tanggal DESC ";
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
<!--footer end -->
</body>
</html>

<script language="javascript"> 
$('a.info').bigPicture({
  'enableInfo': true,
  'infoPosition': 'bottom'
}); 
</script>

