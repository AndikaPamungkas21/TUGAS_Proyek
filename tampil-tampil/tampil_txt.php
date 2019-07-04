<?php

$file = fopen("form.txt", "r") or die("Tidak bisa membuka file!"); //membuka file form.txt
//echo fread($myfile,filesize("file1.txt"));
while(!feof($file)) {      //membaca file 
echo fgets($file) . "<br>";
 }
 fclose($file);
 ?>