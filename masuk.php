<?php


session_start();
 
include 'koneksi.php';
 
$email = $_POST['email'];
$password = $_POST['password'];


 

$data = mysqli_query($koneksi,"select * from tbluser where email='$email' and password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
    echo "<script>alert('login gagal.');window.location='login.php';</script>";
}
?>