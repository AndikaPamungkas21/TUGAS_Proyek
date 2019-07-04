<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 3 Elearning</title>
		<script type="text/javascript">
	
	function cek (){
		var Nim =  (document.pengisian.nim.value); //menangkap dari form pengisian inputan nim
		var nama =  (document.pengisian.nama.value); //menangkap dari form pengisian inputan nama
		var prodi = (document.pengisian.prodi.value); //menangkap dari form pengisian inputan prodi
		var alamat = (document.pengisian.alamat.value); //menangkap dari form pengisian inputan alamat

		//pengkondisian
		if (Nim == "") { 
			alert('Nim mu Kosong')
			 header("location:indexx.php?page=form"); //otomatis mengarah ke index form

		}
		else if (nama == "") {
			alert('Nama Kosong');
			 header("location:indexx.php?page=form");
		}
		else if (Nim == "" && nama == "") {
			alert('Nama DAN NIM Kosong')
		}
		else if (Nim == "" && nama == "" && prodi == "") {
			alert('Nama, NIM dan Prodi Kosong')
		}
		else if (Nim == "" && nama == "" && alamat == "") {
			alert('Nama, NIM dan Alamat Kosong')
		}
		else if (Nim == "" && nama == "" && alamat == "" && prodi == "") {
			alert('Nama, NIM,Prodi dan Alamat Kosong')
		}
	}
</script>
</head>
<body>
	<form name="pengisian" method="POST" action="tampil-tampil/tampilform.php"> <!--form dg nama pengisian action ke tampilform.php -->
		<table border="0" align="center">
<tr align="center">
	<td colspan="3" weight="10">
		<b>FORM PENGISIAN</b>
		<h5>NANTI TERSIMPAN DI NOTEPAD DG NAMA form.txt</h5>
	</td>
</tr>
<tr>
	<td>
	Nama
	</td>
	<td>
		:
	</td>
	<td>
		<input type="text" name="nama"> 
	</td>
</tr>
<tr>
	<td>
		Nim
	</td>
	<td>
		:
	</td>
	<td>
		<input type="number" name="nim">
	</td>
</tr>
<tr>
	<td>
		Prodi
	</td>
	<td>
		:
	</td>
	<td>
		<input type="text" name="prodi">
	</td>
</tr>
<tr>
	<td>
		Alamat
	</td>
	<td>
		:
	</td>
	<td>
		<input type="text" name="alamat">
	</td>
</tr>
<tr>
	<td colspan="3">
	<input type="submit" name="submit" value="submit" onclick="cek()"> <!-- pencet submit akan memanggil fungsi cek() di atas untuk validasi -->
	<input type="reset" name="reset">
	</td>
	
</tr>
</form>
</table>
</body>
</html>