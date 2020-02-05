<?php
// memanggil file koneksi
require_once('koneksi.php');
// include('koneksi.php'); -sama seperti require

// ambil data dari database
$query="SELECT * FROM tb_penduduk";
$data= mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style_login.css">
    <title>Form Login</title>
</head>
<body background="https://image.freepik.com/free-vector/luxury-black-background-banner-illustration-with-gold-strip-art-deco-black-border_25989-213.jpg">

    <form method="post" action="aksi_login.php">
        <div class="container">
            <div class="login-box">
                <h1>Login</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Username" name="username">
                </div>

                <div class="textbox">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div>
                <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </div>
        </div>
    </form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
</body>
</html>