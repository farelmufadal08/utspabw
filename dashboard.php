<?php

//include 'koneksi.php';
include 'koneksi.php';
?>

<!doctype html>
<html lang="en"id = "home">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<style>
  section{
    height: 420px;
  }
</style>

    <title>uts pabw</title>
  </head>
  <body class="mt-5">






<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#home" class="page-scroll">Farel Mufadal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#about" class="page-scroll">Utama <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portroi"class="page-scroll">Bersedekah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" class="page-scroll">kontak</a>
          </li>
          
        </ul>
      </div>
    </div>

    <div class="pull-right pr-5">
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          UTS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">LOGIN</a>
          <a class="dropdown-item" href="create.php">CREATE</a>
          <a class="dropdown-item" href="https://github.com/farelmufadal08/strukdat">GITHUB</a>
        </div>
      </li>
      </ul>
    </div>

    </nav>
    <center><h1>Data peserta</h1><center>
    <center><a href="tambahpeserta.php">+ &nbsp; peserta</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>ID</th>
          <th>Nama</th>
          <th>TLP</th>
          <th>Alamat</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM tblpeserta ORDER BY idpeserta ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['idpeserta']; ?></td>
          <td><?php echo $row['namapeserta']; ?></td>
          <td><?php echo $row['tlp']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          
          <td>
              <a href="editpeserta.php?id=<?php echo $row['idpeserta']; ?>">Edit</a> |
              <a href="hapus.php?id=<?php echo $row['idpeserta']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++;  }
      ?>
    </tbody>
    </table>
</body>