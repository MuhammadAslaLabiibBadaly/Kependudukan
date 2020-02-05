<?php
if(!isset($_SESSION)) {
	session_start();
}

$_SESSION['username']=NULL;
unset($_SESSION['username']);

session_destroy();

header('location: login.php');
?>