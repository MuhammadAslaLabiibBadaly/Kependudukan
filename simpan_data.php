<?php
//koneksi
require_once('koneksi.php');

// ambil data dari form
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];
$golongan=$_POST['golongan'];

// memasukkan data ke database
$query="INSERT INTO tb_penduduk VALUES('$nik','$nama','$gender','$alamat','$status','$golongan')";
$simpan= mysqli_query($conn,$query);

header('location: tampil_data.php')
?>