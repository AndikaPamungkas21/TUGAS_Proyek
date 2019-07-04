<!DOCTYPE html>
<html>
<head>
	<title>Membuat Halaman Web Dinamis</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="css/css_2.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="java/java-2.js"></script>
</head>
<body>

<div class="content">
	<header> <!-- bagian header-->
		<h1 class="judul">TUGAS PROYEK </h1>
		<h3 class="deskripsi">Membuat Halaman Web Dinamis</h3>
	</header>
 
	<div class="menu">
		<ul> <!-- index.php sebagai indexnya agar tidak refres page/pindah halaman sehingga menggunakan variabel page -->
			<li><a href="index.php?page=home">HOME</a></li> <!-- di pencet home mengarah ke indexx.php?page =home -->
			<li><a href="index.php?page=profill">PROFIL</a></li> <!-- di pencet home mengarah ke indexx.php?page =profill -->
			<li><a href="index.php?page=form">FORM</a></li> <!-- di pencet home mengarah ke indexx.php?page =form -->
			<li><a href="index.php?page=caribilangan">CARI BILANGAN</a></li> <!-- di pencet home mengarah ke indexx.php?page =caribilangan-->
			<li><a href="index.php?page=konversi">KONVERSI</a></li> <!-- di pencet home mengarah ke indexx.php?page =konversi-->
			<li> <form name="formcari" onsubmit="cari()" style="size:10"> GOOGLE : <!-- mengarah ke js fungsi cari dg file java-2.js  -->
					<input type="text" name="keyword" size="10">
					<input type="submit" value="cari ! ">
					
				</form></li>
			<li class="waktu"><script type="text/javascript" src="java/waktu.js"></script></li> <!-- memanggil file js waktu-->
			<li id="output"><script type="text/javascript" src="java/jam.js"> </script></li> <!-- memanggil file js jam dengan id output-->

		</ul>

	</div>
 
	<div class="badan"> <!-- bagian badanya / content nya-->
 
 <!-- menggunakan page agar tidak melakukan refres page atau pindah halaman -->
	<?php 
	if(isset($_GET['page'])){  //menangkap page di url
		$page = $_GET['page']; //page akan di simpan di variabel agar dapat di kondisikan
 
		switch ($page) { //pilih page
			case 'home': //jika page home akan mengarah ke welcome.html 
				include "tampil-tampil/welcome.html";
				break;
			case 'profill': //jika page home akan mengarah ke welcome.html
				include "tampil-tampil/datadiriku.html";
				break;
			case 'konversi': //jika page home akan mengarah ke datadiriku.html
				include "tampil-tampil/konversidarijava.html";
				break;
			case 'form': //jika page home akan mengarah ke file konversidarijava.html
				include "tampil-tampil/Tugas3.php";
				break;
			case 'caribilangan': //jika page home akan mengarah ke postest_9.php
				include "tampil-tampil/postest_9.php" ;
				break;	
			case 'nampilForm': //jika page home akan mengarah ke tampilform.php
				include "tampil-tampil/tampilform.php" ;
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}
	else{ //jika selain itu akan mengarah ke welcome.html
		include "tampil-tampil/welcome.html";
	}
 
	 ?>
</div>
	<footer> <!-- bagian FOOTER-->
		<h2 class="footers">Teknik Informatika 2018 </h2>
	</footer>
</div>
</body>
</html>