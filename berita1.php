<html >
<head>
<title>Membuat Red More | Baca Selanjutnya</title>
<style type="text/css">
body{
padding-left:7%;
}
p.gaya:first-letter{
float : left;
font-size : 30px;
font-weight : bold;
}
#kotak{
border:#FF00FF dotted 2px; padding:10px ; width:60%;
}
</style>
</head>
<body>
<div id="kotak">
<?PHP
switch($_GET[act]){
default :
include'koneksi.php';
$Query = mysql_query("Select * from berita order by idberita");
while($tampil=mysql_fetch_array($Query)){
echo "<font color=red size=+2>$tampil[judul]</font><br>";
echo "posted by : $tampil[pengirim] At : $tampil[tanggal]";
echo "<p class=gaya>".substr($tampil[isi],0,200)." ......";
echo "<a href=?berita.php&act=Selanjutnya&data=$tampil[idberita]><br>(red more)</a></p>";

}
case 'Selanjutnya':
if(isset($_GET['data'])){
$dataId=$_GET['data'];
include'koneksi.php';
$tampilinsemuanya = mysql_query("SELECT * FROM berita WHERE idberita='$dataId' ORDER
by idberita asc");
if($tampildong = mysql_fetch_array( $tampilinsemuanya )){
echo "<font color=red size=+2> $tampildong[judul]</font><br>";
echo "posted by : $tampildong[pengirim] At : $tampildong[tanggal]";
echo "<p class=gaya><b>$tampildong[isi]</b></p>";
}
}
}
?>
</div>
</body>
</html> 