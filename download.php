<?php

include_once "./Admin/fungsi_koneksi.php";

$id_image      = $_GET['id_image'];

$query   = "select * from galery WHERE id_image = $id_image";

$hasil   = mysql_query($query);
$data    = mysql_fetch_array($hasil);


header("Content-Disposition: attachment; filename=".$data['id_image']);
header("Content-length: ".$data['id_image']);

header("Content-type: ".$data['id_image']);

echo $data['id_image'];


?>