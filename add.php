<?php
	if(isset($_POST['Submit'])) {
		$nim	= $_POST['nim'];
		$nama	= $_POST['nama'];
		$alamat	= $_POST['alamat'];
		
		//include database connection file
		include"connection.php";
		
		//insert user data into table
		$result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,alamat) VALUES('$nim','$nama','$alamat')");
		
		//Show message when user added
		header("location:show.php");
	}
?>

<?php include"header.php" ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah Data Mahasiswa</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="add.php" class="form-horizontal">
			<div class="form-group">
				<label for="nim" class="col-sm-2 control-label">NIM</label>
				<div class="col-sm-10">
					<input type="text" class="form=control" name="nim" placeholder="Masukan NIM...">
					</div>
				</div>
				
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap...">
					</div>
				</div>
				
				<div class="form-group">
					<label for="alamat" class="col-sm-2 control-label">Alamat</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat...">
						</div>
					</div>
					
					<div class="form=group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
							<input type="reset" name="reset" class="btn btn-warning" value="Reset">
						</div>
					</div>
				</form>
			</div>
		</div>
	<?php include"footer.php" ?>
					
							