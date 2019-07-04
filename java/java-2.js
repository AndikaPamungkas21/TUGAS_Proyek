function cari(){
	var kata = (document.formcari.keyword.value); //menangkap kata yang kita inputkan dari formcari input keyword isinya
	var hasil = "http://www.google.com/search?q=" +kata; //pendeklarasian var hasil  = alamat google dari kata 
	if (kata == "") {

		alert('Form Pencarian harus di isi'); //jika kata kosong akan alert
	}
	else {
		
		window.open(hasil,'google',config='height="500" width="700" scrollbar="yes" location="yes"') //jika tidak kosong otomatis akan ke google dengan pencarian yang sesuai kata dari kita
	}
	
}