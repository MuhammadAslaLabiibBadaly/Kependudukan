<?php
// memanggil file koneksi
require_once('koneksi.php');
require_once('satpol.php');
// include('koneksi.php'); -sama seperti require

// ambil data dari database
$query="SELECT * FROM tb_penduduk";
$data= mysqli_query($conn,$query);

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
	  	<a class="navbar-brand" href="#">DK</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="nav navbar-nav navbar-right">
		      	<li>
		        	<a class="nav-link" href="logout.php">Logout</a>
		      	</li>
		    </ul>
	  	</div>
	</nav>

	<div class="container">
		<form class="form">
			<div class="tabel">
				<h1 align="center">Kependudukan</h1>
				<table class="table table-dark">
			  		<thead>
			  			<tr>
			  				<th>NIK</th>
			  				<th>Nama</th>
			  				<th>Gender</th>
			  				<th>Alamat</th>
			  				<th>Status</th>
			  				<th>Golongan</th>
			  				<th>Aksi</th>
			  			</tr>
			  		</thead>
			  		<?php
						while ($row=mysqli_fetch_assoc($data)) {
					?>
						<tr>
							<td><?php echo $row['nik']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['alamat']; ?></td>
							<td><?php echo $row['status']; ?></td>
							<td><?php echo $row['golongan']; ?></td>
							<td>
								<a href="edit_data.php?nik=<?php echo $row['nik']; ?>"><i class="fa fa-edit" style="color: cyan"></i></a> |
								<a href="hapus_data.php?nik=<?php echo $row['nik']; ?>" onclick = "return confirm('Hapus??')"><i class="fa fa-trash" style="color: red"></i></a>
							</td>
						</tr>
					<?php
					 }
					?>
				</table>
			</div>
		</form>
		<div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="'.$row['nik'].'"><i class="fa fa-plus"> Tambah</i></button>
		</div>
	</div>


	<!-- modal 1 -->
	<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">tambahkan</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="inputan">
				<form method="post" action="simpan_data.php">
					<div class="form-group">
						<label>NIK</label>
					    <input type="text" name="nik" class="form-control" required="required">
					</div>
					<div class="form-group">
						<label class="col-form-label">Nama</label>
					    <input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label class="col-form-label">Gender</label>
					</div>
					<div class="form-group">
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" value="L" class="form-check-input">
							<label class="form-check-label">Laki-Laki</label>   
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" name="gender" value="P"class="form-check-input">
							<label class="form-check-label">Perempuan</label>  
						</div>
					</div>
					<div class="form-group">
						<label class="col-form-label">Alamat</label>
					    <textarea name="alamat" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label class="col-form-label">Status(Nikah/Belum Nikah)</label>
						<input type="text" name="status" class="form-control">
					</div>
					<div class="form-group">
						<label class="col-form-label">Golongan(WNI/WNA)</label>
						<input type="text" name="golongan" class="form-control">
					</div>

					<div class="modal-footer">
					<button type="submit" class="btn btn-block btn-primary">simpan</button>
	        		<button type="reset" class="btn btn-block btn-danger" data-dismiss="modal">batal</button>
	        		</div>
				</form>
			</div>
	      </div>
	    </div>
	  </div>
	</div>	
	<!-- akhir modal 1 -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>