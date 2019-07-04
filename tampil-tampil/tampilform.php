<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	//pengecekan method dan menerima dari nama nim prodi yang di simpan di variabel 
			if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["nim"]) && isset($_POST["prodi"]) && isset($_POST["alamat"])) {
		$nama = $_POST["nama"]; //menyimpan nama dari form ke variabel
		$NIM = $_POST["nim"]; //menyimpan nim dari form ke variabel
		$prodi = $_POST['prodi']; //menyimpan prodi dari form ke variabel
		$alamat = $_POST['alamat']; //menyimpan alamat dari form ke variabel
		   if (is_numeric($nama)){
      die ("Maaf, nama harus berupa huruf");
   }
 /*  else if(is_s($NIM)){
      die ("NIM Harus ANgkka");
  }*/
   else{
   	 if (empty($nama) && empty($NIM)){
	echo "Nama DAN Nim Kosong";
}
else if (empty($nama)){
	echo " Nama Kosong";
}
else if (empty($NIM)){
	echo " Nim Kosong";
}
	else if(!empty($nama) && !empty($NIM) ){
	echo "<h2>Selamat Datang</h2>";
	//menampilkan dari isian form yang di simpan di variabel tadii
	echo "NAMA MU : ".$nama . "<br>" . "NIM : ".$NIM. "<br>" . "prodi : ".$prodi. "<br>" . "Alamat : ".$alamat. "<br>" ."<br>". "ISI FORM INI SUDAH DI CETAK DI NOTEPAD SILAHKAN CEK form.txt";
}

}
//akses file menulis ke notepad dengan menerima dari form
$file = fopen("form.txt","a") or die("File Tidak Ada");

fwrite($file,"nama : " .$nama); //menulis ke teks dari nama ke file form.txt
fwrite($file, "\n");
fwrite($file, "NIM : " .$NIM); //menulis ke teks dari Nim ke file form.txt
fwrite($file, "\n");
fwrite($file,"prodi : ". $prodi); //menulis ke teks dari Prodi ke file form.txt
fwrite($file, "\n");
fwrite($file,"alamat : ". $alamat); //menulis ke teks dari alamat ke file form.txt
fwrite($file, "\n");
fwrite($file, "\n");
fclose($file); //tutup file

}
?>
<br>
<a href="tampil_txt.php">menampilkan file txt</a>

</body>
</html>