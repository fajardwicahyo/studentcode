<?php
	// include database connection file
	include"connection.php";
	
	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{
		$id		= $_POST['id'];
		$nim	= $_POST['nim'];
		$nama	= $_POST['nama'];
		$alamat	= $_POST['alamat'];
		
		// update user data
		$result = mysqli_query($con, "UPDATE mahasiswa SET nim='$nim', nama='$nama',alamat='$alamat' WHERE id=$id");
		
		// Redirect to homepage to display updated user in list
		header("location:show.php");
	}
?>

<?php
		//Display selected user data based on id
		//Getting id from url
		$id = $_GET['id'];
		
		//Fetch user data based on id
		$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE id=$id");
		
		while($data = mysqli_fetch_array($result))
		{
			$nim	= $data['nim'];
			$nama	= $data['nama'];
			$alamat	= $data['alamat'];
			}
?>
<?php include"header.php" ?>
<div class="panel panel-default">
	<div class="panel panel-heading">
		<h3 class="panel-title">Edit Data Mahasiswa</h3>
	</div>
	<div class="panel-body">
		<form method="post" action="update.php" class="form-horozontal">
			<div class="form-group">
				<label for="nim" class="col-sm-2 control-label">NIM</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nim" placeholder="Masukan NIM..." value="<?php echo $nim;?>">
				</div>
			</div>
			
			<div class="form-group">
				<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" palceholder="Masukan Nama Lengkap..." value="<?php echo $nama;?>">
				</div>
			</div>
			
			<div class="form-group">
				<label for="nama" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="alamat" palceholder="Masukan Alamat..." value="<?php echo $alamat;?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<!--<td>input type="submit" name="update" value="Update"></td> -->
					<input type="submit" name="update" class="btn btn-primary" value="Update">
					<input type="reset" name="reset" class="btn btn-warning" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>

<?php include"footer.php" ?>