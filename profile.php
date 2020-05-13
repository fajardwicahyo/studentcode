<?php include "header.php"; ?>
<html>
	<div class="col-sm-9">
		<h2><mark style="background: #fff;"> &raquoTentang Saya</mark></h2>
		<hr/>
		<div class="well">
			<body>
				
				<video autoplay loop poster="./img/air.png" id="bgvid">
				<source src="./img/awan.mov" type="video/mp4">
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
		
				<audio src="./img/canon.mp3" autoplay loop hidden="true"> </audio>

				<p align="right"><font color="blue"><script type="text/javascript">
					now = new Date();
					if (now.getTimezoneOffset() == 0) (a=now.getTime() + ( 7 *60*60*1000))
					else (a=now.getTime());
					now.setTime(a);
					var tahun= now.getFullYear ()
					var hari= now.getDay ()
					var bulan= now.getMonth ()
					var tanggal= now.getDate ()
					var hariarray=new Array("Ahad,","Senin,",
					"Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,")
					var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","/ 12 /")
					document.write(hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun)
					</script>
					<script type="text/javascript">
					now = new Date();
					if (now.getTimezoneOffset() == 0) (a=now.getTime() + ( 7 *60*60*1000))
					else (a=now.getTime());
					now.setTime(a);
					document.write("| Pukul " + ((now.getHours() < 10) ? "0" : "") + now.getHours() + ":" + ((now.getMinutes() < 10)? "0" : "") + now.getMinutes() + (" WITA "))
					</script></font>
				</p>

				<marquee>-=-=-=-=-=Selamat Datang di Pemrograman Web 2 UNISKA MAB Banjarbaru oleh Fajar Dwi Cahyo=-=-=-=-=-</marquee>
				<p><font face="Century Gothic"><p><i><br>Assalamu'alaikum Warohmatullahi Wabarokatuh.</i></br><br>
					<br>Ibarat kata Pepatah...Tak Kenal, Maka Tak Sayang.</br>
					<br>(Sudah Kenal, Tak Sayang-sayang.)</br>
					<br>Berikut saya sampaikan Data Diri saya.</p>	
					<table width="745" border="1" cellspacing="0" cellpadding="5" align="center">
						<tr align="center" bgcolor="#87CEFA" height="25">
						<td width="175"> DATA DIRI</td>
						<td width="585"> KETERANGAN</td>
						</tr>
						<tr height="25">
						<td><font color="#87CEFA">_Nama</font></td>
						<td bgcolor="#87CEFA">_Fajar Dwi Cahyo</td>
						</tr>
						<tr height="25">
						<td bgcolor="#87CEFA">_NPM</td>
						<td><font color="#87CEFA">_17630515</font></td>
						</tr>
						<tr height="25">
						<td><font color="#87CEFA">_Universitas</font></td>
						<td bgcolor="#87CEFA">_UNISKA Muhammad Arsyad Al-Banjari</td>
						</tr>
						<tr height="25">
						<td bgcolor="#87CEFA">_Jurusan</td>
						<td><font color="#87CEFA">_Teknik Informatika</font></td>
						</tr>
						<tr height="25">
						<td><font color="#87CEFA">_Kelas</font></td>
						<td bgcolor="#87CEFA">_4F Reg. Malam Banjarbaru</td>
						</tr>
						<tr height="25">
						<td bgcolor="#87CEFA">_Jenis Kelamin</td>
						<td><font color="#87CEFA">_Laki-laki</font></td>
						</tr>
						<tr height="25">
						<td><font color="#87CEFA">_Tempat/Tanggal Lahir</font></td>
						<td bgcolor="#87CEFA">_Lamongan/01 Agustus 1999</td>
						</tr>
						<tr height="25">
						<td bgcolor="#87CEFA">_Alamat</td>
						<td><font color="#87CEFA">_Jalan Intan Raya Gang Abadi RT 005 RW 002 Loktabat Utara, Banjarbaru</font></td>
						</tr>
						</tr>
						<tr height="25">
						<td><font color="#87CEFA">_Status</font></td>
						<td bgcolor="#87CEFA">_Mahasiswa</td>
						</tr>
					</table>
				<p><br>Terima kasih telah berkunjung.</br></p></font> <br><br>
				
			</body>

		</div>
	</div>
	
	<div class="col-sm-3">
	<div class="sidebar">
		<h2><mark style="background: #fff;"> &raquoMy Photo</mark></h2>
		<hr/>

			<div class="well">
			<p align="center">_-=-__-=-__-=-__-=-__-=-__-=-_<br>
			</p>			
			<div class='slide'>
			<input type='radio' name='radio-set' checked='checked' title="My Photo" />
			<img src='./img/foto1.jpg'/>

			<input type='radio' name='radio-set' />
			<img src='./img/foto2.png'/>

			<input type='radio' name='radio-set' />
			<img src='./img/foto3.jpg'/>

			<input type='radio' name='radio-set' />
			<img src='./img/foto4.png'/>
			
			<input type='radio' name='radio-set' />
			<img src='./img/foto5.jpg'/>
			<style type='text/css'>
				.slide {
				position:relative;
				margin:0 auto;
				width:210px;
				height:130px;
				overflow:hidden
				}

				.slide input {
				display:block;
				position:absolute;
				width:205px;
				height:125px;
				left:0;
				top:0;
				opacity:0;
				cursor:pointer;
				margin:0;
				padding:0
				}

				.slide img {
				visibility:hidden;
				opacity:0;
				width:205px;
				height:125px;
				position:absolute;
				left:0;
				top:0;
				border:10px solid #ddd;
				border-radius:10px;
				transition:all .5s ease-out
				}

				.slide input:checked + img {
				visibility:visible;
				opacity:1
				}

				.slide input:checked { display:none }

				.slide input:nth-child(1) { z-index:13 }
				.slide input:nth-child(3) { z-index:12 }
				.slide input:nth-child(5) { z-index:11 }
				.slide input:nth-child(7) { z-index:10 }

				.slide input:nth-child(1):checked ~ input:nth-child(3),
				.slide input:nth-child(3):checked ~ input:nth-child(5),
				.slide input:nth-child(5):checked ~ input:nth-child(7) { z-index:15 }
			</style>
			</div>
			<p align="center">Klik Untuk Melihat Foto lainnya...<br>
			=-_-==-_-==-_-==-_-==-_-==-_-=<br><br>
			Like Sosial Media Saya...
			</p>
			<p align="center">
			<a href="https://www.facebook.com/fajar.dwi.169/" target="a_blank"><img class="img" title="Like Facebook Saya" src="./img/fb.jpg" width="25%"></a>
			<a href="https://www.twitter.com/fajar_2c/" target="a_blank"><img class="img" title="Follow Twitter Saya" src="./img/tw.jpg" width="25%"></a>
			<a href="https://www.instagram.com/fajar.d.c/" target="a_blank"><img class="img" title="Follow Instagram Saya" src="./img/ig.jpg" width="25%"></a>
			</p>
			</div>
		
		<font size="4" face="Century Gothic"><h2><mark style="background: #fff;"> &raquoKalender</mark></h2></font>
		<hr/>	
		<div class="well">
			<script type="Text/Javascript">
				var months = new Array();
				months[0] = "Januari";
				months[1] = "Feburari";
				months[2] = "Maret";
				months[3] = "April";
				months[4] = "Mei";
				months[5] = "Juni";
				months[6] = "Juli";
				months[7] = "Agustus";
				months[8] = "September";
				months[9] = "Oktober";
				months[10] = "November";
				months[11] = "Desember";

				var currentDate = new Date();
				var currentMonth = currentDate.getMonth();
				var hariini=currentDate.getDate();
				currentDate.setDate(1);
				document.write("<table align='center' border=1 cellpadding=3 cellspacing=0>");
				document.write("<tr>");
				document.write("<td colspan=7 align='center'><strong>"+ months[currentMonth] +"</strong></td>");
				document.write("</tr>")
				document.write("<tr bgcolor='#AAAAAA'>");
				document.write("<td align='center'>Ahad</td>");
				document.write("<td align='center'>Sen</td>");
				document.write("<td align='center'>Sel</td>");
				document.write("<td align='center'>Rab</td>");
				document.write("<td align='center'>Kam</td>");
				document.write("<td align='center'>Jum</td>");
				document.write("<td align='center'>Sab</td>");
				document.write("</tr>");

				if (currentDate.getDay() != 0)
				{
				document.write("<tr>");
				for (i = 0; i < currentDate.getDay(); i++)
				{
				document.write("<td>&nbsp;</td>");
				}
				}

				while (currentDate.getMonth() == currentMonth)
				{
				if (currentDate.getDay == 0)
				{
				document.write("<tr>");
				}

				if (hariini==currentDate.getDate())
				{
				document.write("<td align='center' position='center' bgcolor='#87CEFA'> <font color='blue'><strong>" + currentDate.getDate() + "</strong></font></td>");
				}

				else
				{
				document.write("<td align='center'>" + currentDate.getDate() + "</td>");
				}

				if (currentDate.getDay() == 6)
				{
				document.write("</tr>");
				}
				currentDate.setDate(currentDate.getDate() + 1);
				}

				for (i = currentDate.getDay(); i <= 6; i++)
				{
				document.write("<td>&nbsp;</td>");
				}

				document.write("</table>");
			</script>
		</div>
		

              
        
	</div>
	</div>
</html>
<?php include "footer.php"; ?>