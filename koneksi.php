<?php
  $host = "localhost"; 
  $user = "farelmuf_farel";
  $pass = "Sebelas11";
  $nama_db = "farelmuf_db_farel"; 
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 

  if(!$koneksi){ 
    die ("Koneksi dengan database gagal: ".mysqli_connect_error());
  }
?>