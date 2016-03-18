<html>
<head>
<title>Kalkulator Dengan HP</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>
 
<body>
  
	
	<div id="menu">
		<form name="fform" method ="post" action = "rumus2.php">
			<font>       
				<blink>
					<center id="judul">
						<h2>KALKULATOR</h2>
					</center>
				</blink>
			</font>
	</div>
	
	<div id="sidebar">
		<p id="profil"><img src="contact.png" align="center" height="30"> PROFILE</p><br/>
				<ul class="slider">
					<li><a href="bakti.php"><h3>Bakti Nur Wahyudin</h3></a>
					<li><a href="donny.php"><h3>Donny Setiaji</h3></a></li>
				</ul>
			</div>
	<br/><br/><br/><br/><br/><br/>
	<div id="badan">
		<div id ="badan2">
			<img src="kalkulator.jpg" alt="image" align="center" />
			<p>Mesin hitung atau Kalkulator adalah alat untuk menghitung dari perhitungan sederhana seperti penjumlahan, </p>
			<p>pengurangan, perkalian dan pembagian sampai kepada kalkulator sains yang dapat menghitung rumus matematika tertentu.</p>
			<p>Pada perkembangannya sekarang ini, kalkulator sering dimasukkan sebagai fungsi tambahan daripada komputer, handphone, </p>
			<p>bahkan sampai jam tangan. </p><br/><br/>
			<p>Dibawah ini merupakan contoh kalkulator yang dibuat dengan PHP, anda bisa mensimulasikannya.</p>
			<p> Untuk tutorial pembuatannya bisa klik tombol dibawah ini</p>
			<div class="button"><a href="http://baktinw.blogspot.co.id">Bakti</a></div>
			<div class="button"><a href="http://donnysetiaji.blogspot.co.id">Donny</a></div>
		</div>
    <div id="kalkulator">
	<div class="kalkulator2">
		<p style=" text-align:center;">Bilangan Pertama </p>
		<input size="16" name="bil1" type="text" placeholder="Bilangan pertama" />
	</div>
	<div class="clearing"></div>
	<div class="kalkulator2">
		<p style=" text-align:center;">Bilangan Kedua  </p>
		<input size="16" name="bil2" type="text" placeholder="Bilangan Kedua" />
	</div>
	<div class="clearing"></div>
	<div class="kalkulator2">
		<p style="background:orange; text-align:center;">Hasil </p>
		<input size="16" name="bil3" type="text" placeholder="Hasil" value="<?php if (isset($_GET['bil3'])) echo $_GET['bil3']?>" />
	</div>
	
	<div id="tombol">
                  <p width="31"><input value="+"  type="submit" name ="tambah" /></p>
                  <p width="27"><input value="-"  type="submit" name = "kurang" /></p>
                  <p width="31"><input value="*"  type="submit" name = "kali" /></p>
                  <p width="27"><input value="/"  type="submit" name = "bagi" /></p>
                  <p width="94"><input value="Bersihkan" type="submit" name = "input" /></p>
     </div>
	</div>
	</div>
</body>
</html>