var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];//nama bulan
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu']; //nama hari
			var date = new Date(); //data terapdate
			var day = date.getDate(); //untuk hari
			var month = date.getMonth(); //bulan
			var thisDay = date.getDay(), //hari saat ini
			    thisDay = myDays[thisDay]; 
			var yy = date.getYear(); //tahun saat  ini
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year); //hari bulan dan tahun

