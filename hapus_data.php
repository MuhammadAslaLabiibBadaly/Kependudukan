<?php
include ('koneksi.php');

$nik=$_GET['nik'];

$query="DELETE FROM tb_penduduk WHERE nik = '$nik' ";
$data= mysqli_query($conn,$query); 

header('location: tampil_data.php');
?>