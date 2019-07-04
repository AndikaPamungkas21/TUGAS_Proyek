 window.setTimeout("waktu()",1000);    
    function waktu() {     //fungsi waktu
    var tanggal = new Date();    //waktu terapdate
    setTimeout("waktu()",1000);    
    document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();  //jam menit dan detik
    }   