<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="2" width="60%" align="center">
		<tr>
			<td align="center"> Mencari Bilangan Prima, Ganjil Dan Genap </td> 
		</tr>
		<tr>
			<td>
				<form method="POST" name="frm" action=""> <!--form dg nama frm  -->
					Masukkan Jumlah Angka : <input name="jumlah" type="number" /> <!--inputan angka yang nanti akan di tangkap di form bawahnya-->

					  <input type="submit" name="btnJumlah" value="Ok" /> <!--submit -->

  				</form>

			</td>
		</tr>
		<form name="inputan" method="POST"> <!-- form dg nama inputan  -->
						 <?php

 					 if(isset($_POST['jumlah']) && $_POST['jumlah']>0){ //menangkap inputan jumlah di atas 
 
 						 $jumlah_form = $_POST['jumlah']; //jumlah di simpan di variabel jumlah_form

							}

  					else{

 						 $jumlah_form = 1; //jika form kurang dari 1 maka otomatis dia akan tetap 1

 						 }

 						 for($i=1; $i<=$jumlah_form; $i++){ //perulangan dengan batas jumlah_form di atas

  						?> 
		<tr>
			<td>
				angka Ke <?php echo $i; ?> : <input name="bilangan[]" type="number" size="10" /> <!-- inputan form dengan jumlah perulangan-->
			</td>
		</tr>
		  <?php
 				 }
 		 ?>
		<tr>
			<td>
			
				<input type="submit" value="CEK!!" name="button" > 
				<input type="reset" value="reset">
				
			</td>
		</tr>
		<tr>
			<td>
				Genap :  
				<?php
  
  if(isset($_POST['button'])){ //menangkap submit dengan nama button

  $bilangan = $_POST['bilangan']; //bilangan array tadi akan di simpan di bilangan


  foreach($bilangan as $key => $val){ //pencarian array 
  	if ($bilangan[$key] % 2 == 0) { //jika bilangan genap
  		
  		echo $bilangan[$key]. " , "; //akan menampilkan angkanya
  	}

'<br>';
  

  }

  }

  ?>
<br>
			Ganjil: 
								<?php
  
  if(isset($_POST['button'])){ //menangkap submit dengan nama button

  $bilangan = $_POST['bilangan']; //bilangan array tadi akan di simpan di bilangan


  foreach($bilangan as $key => $val){ //pencarian array 
 	if ($bilangan[$key] % 2 == 1) { //jika bilangan genap
  		echo $bilangan[$key]." , "; //akan menampilkan angkanya
  	}

'<br>';
  

  }

  }

  ?>
  <br>
  		Prima :
  				<?php
  
  if(isset($_POST['button'])){ //menangkap submit dengan nama button

  $bilangan = $_POST['bilangan']; //bilangan array tadi akan di simpan di bilangan


  foreach($bilangan as $key => $val){ //pencarian array 
 	if ($bilangan[$key] % 2 == 1 ) { //jika bilangan genap
  		echo $bilangan[$key]." , "; //akan menampilkan angkanya
  	}

'<br>';
  

  }

  }

  ?>

  						

			</td>
		</tr>
		</form>
	</table>
</body>
</html>