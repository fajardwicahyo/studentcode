<?php include"header.php" ?>
	<div class="row">
		<div class="col-md-12">
			<form action="show.php" method="get" class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" name="search" placeholder="Masukan Nim">
				</div>
				<input type="submit" value="cari" class="btn btn-primary">
			</form>
			<hr>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Data Mahasiswa</h3>
					</div>
					
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>NIM</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
						
						<?php
							include 'connection.php';
							if (isset($_GET['search'])) {
								$keyword = $_GET['search'];
								$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim LIKE '%".$keyword."%'");
							}else
								$result = mysqli_query($con, "SELECT * FROM mahasiswa ORDER BY nim ASC");
							
							$no = 1;
							while($data = mysqli_fetch_array($result)){
						?>
						
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nim']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['alamat']; ?></td>
								<td>
									<a class="btn btn-xs btn-success" href="update.php?id=<?php echo $data['id']; ?>">Edit</a>
									<a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $data['id']; ?>"onclick="return confirm ('Anda yakin mau menghapus item ini ?')">Hapus</a>
								</td>
							</tr>
							
						<?php
						}
						?>
					</table>
				</div>
			</div>
		</div>
	<?php include"footer.php" ?>
		
								