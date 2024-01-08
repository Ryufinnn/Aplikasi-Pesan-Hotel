<?php
include_once "../library/koneksi.php";
 include_once "../library/librari.php";
	$id	   	= $_POST['TxtId'];
	$tgl 	   	= $_POST['tanggal'];
	$jdl = $_POST['TxtJdl'];
	$isi 	= $_POST['TxtIsi'];
	$pnls		= $_POST['TxPenulis'];
	
$sql="insert into berita values('$id',
							 '$tgl',
							 '$jdl ',
							 '$isi',
							 '$pnls')";
							 
$hasil=mysql_query($sql);
$file_name = $_FILES['NamaFile']['name'];
		$file_name = stripslashes($file_name);
		$file_name = str_replace("'","",$file_name);
		copy($_FILES['NamaFile']['tmp_name'],"./images/".$file_name);
header('location:../Admin/menu.php?page=AddBerita');

?>