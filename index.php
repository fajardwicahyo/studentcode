<?php include"header.php" ?>
	
	<div class="text-center">
		<video autoplay loop poster="./img/air.png" id="bgvid">
		<source src="./img/air.mov" type="video/mp4">
		</video>
		<style type="text/css">
			video {
				position:fixed;
				right:0;
				bottom:0;
				min-width:100%;
				min-height:100%;
				width:auto;
				height:auto;
				z-index:-70;
			}
		</style>
		<img src="img/logo-uniska.png" width="200px" alt="UNISKA">
		<h2>Selamat Datang</h2>
		<p>Materi ini mempelajari tentang <strong>CRUD</strong>
		  sederhana dengan <code>PHP MYSQLI</code>
		</p>
	</div>
<?php include"footer.php" ?>