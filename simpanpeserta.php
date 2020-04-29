<?php

include 'koneksi.php';




  $namapeserta  = $_POST['namapeserta'];
  $tlp     = $_POST['tlp'];
  $alamat    = $_POST['alamat'];
 

   $query = "INSERT INTO tblpeserta (namapeserta, tlp, alamat) VALUES ('$namapeserta', '$tlp', '$alamat')";
            $result = mysqli_query($koneksi, $query);
                 
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');</script>";
                    header("Location:dashboard.php");
                    //echo "header('location:dashboard.php')";
                  }
?>

 

