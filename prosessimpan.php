<?php

include 'koneksi.php';
//include 'koneksilokal.php';


  $namapeserta  = $_POST['namapeserta'];
  $tlp     = $_POST['tlp'];
  $alamat    = $_POST['alamat'];
  $id = $_POST['idpeserta'];
 

  $query  = "UPDATE tblpeserta SET namapeserta = '$namapeserta', tlp = '$tlp', alamat = '$alamat'";
  $query .= "WHERE idpeserta = '$id'";
  $result = mysqli_query($koneksi, $query);

  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                     " - ".mysqli_error($koneksi));
} else {
 // echo "<script>alert('Data berhasil diubah.');window.location='dashboard.php';</script>";
  header("Location:dashboard.php");
}
?>

 

