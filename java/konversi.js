function hitungnilai() {

		var point1=  parseFloat(document.name_from.HTML2.value); //menangkap value dari name_from HTML2 yang di simpan di point1
		var point2 =  parseFloat(document.name_from.js2.value); //menangkap value dari name_from js2 yang di simpan di point2
		var point3 =  parseFloat(document.name_from.PHP2.value); //menangkap value dari name_from PHP2 yang di simpan di point3
		var point4 =  parseFloat(document.name_from.kode2.value); //menangkap value dari name_from kode2 yang di simpan di point4

		var	Hasil = point1+point2+point3+point4; //hasil akan menampung dari jumlah point 1 sampai 5
		/*
		var Penampung_P1 = (25/100)*point1;
		var Penampung_P2 = (30/100)*point2;
		var Penampung_P3 = (30/100)*point3;
		var Penampung_P4 = (15/100)*point4;

		var	Hasil = Penampung_P1 + Penampung_P1 + Penampung_P1 + Penampung_P1;
		*/
		if(Hasil>80){ 
			document.name_from.index.value=(Hasil); //akan menampilkan di inputan index di file konversidarijava 
			document.name_from.ket.value=('A'); //akan menampilkan di inputan ket di file konversidarijava 
			
			alert("LULUS(Sangat Bagus)"+Hasil); //muncul di atas 
				}

		else if (Hasil>=61 && Hasil<=80 ){
			document.name_from.index.value=(Hasil); //akan menampilkan di inputan index di file konversidarijava 
			document.name_from.ket.value=('B'); //akan menampilkan di inputan ket di file konversidarijava 

			alert('LULUS (BAGUS)' +Hasil); //muncul di atas 
			
				}
		else if (Hasil<=60 && Hasil>=55){
			document.name_from.index.value=(Hasil); //akan menampilkan di inputan index di file konversidarijava 
			document.name_from.ket.value=('C'); //akan menampilkan di inputan ket di file konversidarijava 
			alert('LULUS (KURANG BAGUS)' +Hasil); //muncul di atas 
			
				}
		else{
			document.name_from.index.value=(Hasil); //akan menampilkan di inputan index di file konversidarijava 
			document.name_from.ket.value=('D'); //akan menampilkan di inputan ket di file konversidarijava 

			alert("GAGAL" +Hasil); //muncul di atas 
			
				}
			}