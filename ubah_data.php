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
$query="UPDATE tb_penduduk SET nama = '$nama', gender = '$gender', alamat = '$alamat', status = '$status', golongan = '$golongan' WHERE nik = '$nik' ";
$simpan= mysqli_query($conn,$query);

header('location: tampil_data.php')
?>