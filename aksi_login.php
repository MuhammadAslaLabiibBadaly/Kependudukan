<?php
if(!isset($_SESSION)) {
	session_start();
}

?>

<?php
//koneksi
require_once('koneksi.php');
require_once('satpol.php');

// ambil data dari form
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$query="SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$data=mysqli_query($conn,$query);

$login=mysqli_num_rows($data);

if($login > 0) {
	$_SESSION['username']=$username;
	header("location: tampil_data.php");
} else {
	header("location: tampil_data.php");
}
?>
