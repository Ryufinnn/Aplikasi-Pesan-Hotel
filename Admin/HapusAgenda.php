<?php
if (! $_GET['kdhapus']=="") {
include_once "../library/koneksi.php";
 include_once "../library/librari.php";
	$sql = " DELETE FROM trading WHERE id ='".$_GET['kdhapus']."'";
	mysql_query($sql) 
		  or die ("Gagal query hapus".mysql_error());
	$file_name = $_FILES['NamaFile']['name'];
		$file_name = stripslashes($file_name);
		$file_name = str_replace("'","",$file_name);
		copy($_FILES['NamaFile']['tmp_name'],"./images/".$file_name);
header('location:../Admin/menu.php?page=Addtrading');
}
else {
	header('location:../Admin/menu.php?page=Addtrading');
	exit;
}
?>
