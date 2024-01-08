<?php
  // code A
  include("fungsi_koneksi.php");
  // end of code A
  
  // code B
  $lokasi_file = $_FILES['irfan1']['tmp_name'];
  $tipe_file   = $_FILES['irfan1']['type'];
  $nama_file   = $_FILES['irfan1']['name'];
  $direktori   = "image/$nama_file";
  // end of code B
  
  if (!empty($lokasi_file)) {
	move_uploaded_file($lokasi_file,$direktori); 
  
    // code C
    $koneksi = koneksi_db();
    $sql = "insert into dtimage values (null,'$nama_file','$_POST[tanggal]','$_POST[TxtKet]','$_POST[TxtPenulis]')";
    $aksi = mysql_query($sql,$koneksi);
    // end of code C
	
	// code D
	if (!$aksi) {
	echo "maaf gagal memasukan gambar";
  	}else{
		echo "gambar berhasil di upload<br>";
		echo "untuk melihatnya silakan klik <a href='view_image.php'>Link ini</a>";
  	}
	// end of code D
	
  }else{
	echo "terjadi kesalahan";  
  }
echo "<tr>";
echo "</tr>";
echo "<tr>";
echo "</tr>";
echo "Kembali ke Halaman Sebelumnya <a href='../Admin/menu.php?page=AddFasilitas'>Link Ini</a>";
  
  
?>