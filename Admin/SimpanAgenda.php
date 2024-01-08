<?php
include_once "../library/koneksi.php";
 include_once "../library/librari.php";
	$id	   	= $_POST['TxtId'];
	$tgl 	   	= $_POST['tanggal'];
	$isi = $_POST['TxtTopick'];
	
	
$sql="insert into trading values('$id',
							 '$isi',
							 '$tgl')";
							 
$hasil=mysql_query($sql);
$file_name = $_FILES['NamaFile']['name'];
		$file_name = stripslashes($file_name);
		$file_name = str_replace("'","",$file_name);
		copy($_FILES['NamaFile']['tmp_name'],"./images/".$file_name);
header('location:../Admin/menu.php?page=Addtrading');

?>