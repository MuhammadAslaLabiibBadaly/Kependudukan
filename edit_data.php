<?php
// memanggil file koneksi
require_once('koneksi.php');
require_once('satpol.php');
// include('koneksi.php'); -sama seperti require

$nik = $_GET['nik'];

// ambil data dari database
$query="SELECT * FROM tb_penduduk WHERE nik = '$nik'";
$data= mysqli_query($conn,$query);

$row =mysqli_fetch_assoc($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style_tampil_data.css">

    <title></title>
  </head>
  <body class="theme-black">
  	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  	<a class="navbar-brand" href="#">Navbar</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      	<li class="nav-item">
		        	<a class="nav-link" href="tampil_data.php">Kependudukan</a>
		      	</li>
		      	<li class="nav-item">
		       		<a class="nav-link" href="#">Features</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="logout.php">Logout</a>
		      	</li>
		    </ul>
	  	</div>
	</nav>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="text-center">Edit Data</h2>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<form method="post" action="ubah_data.php">
					<div class="form-group">
						<label>NIK</label>
					    <input type="text" name="nik" class="form-control" required="required" value="<?php echo $row['nik']; ?>">
					</div>
					<div class="form-group">
						<label class="col-form-label">Nama</label>
					    <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">
					</div>
					<div class="form-group">
						<label class="col-form-label">Gender</label>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" value="L" class="form-check-input" 
							<?php if (!strcmp($row ['gender'], "L")) {echo "CHECKED"; }?>>
							<label class="form-check-label">Laki-Laki</label>   
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" value="P"class="form-check-input"
							<?php if (!strcmp($row ['gender'], "P")) {echo "CHECKED"; }?>>
							<label class="form-check-label">Perempuan</label>  
						</div>
					</div>
					<div class="form-group">
						<label class="col-form-label">Alamat</label>
					    <textarea name="alamat" class="form-control"><?php echo $row['alamat']; ?></textarea>
					</div>
					<div class="form-group">
						<label class="col-form-label">Status(Nikah/Belum Nikah)</label>
						<input type="text" name="status" class="form-control" value="<?php echo $row['status']; ?>">
					</div>
					<div class="form-group">
						<label class="col-form-label">Golongan(WNI/WNA)</label>
						<input type="text" name="golongan" class="form-control" value="<?php echo $row['golongan']; ?>">
					</div>

					<div class="modal-footer">
					<button type="submit" class="btn btn-block btn-primary">simpan</button>
	        		<button type="reset" class="btn btn-block btn-danger" data-dismiss="modal">batal</button>
	        		</div>
				</form>
		</div>
	</div>
</div>		