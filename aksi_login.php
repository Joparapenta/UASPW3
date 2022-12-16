<?php
session_start();
include "koneksi.php";

//tangkap data yang dikirim dari form login
$username = $_POST["username"];
$password= $_POST["password"];

//kueri data dari database
$query=mysqli_query($connection,"select * from user
 where username='$username' and password='$password'");

$cek=mysqli_num_rows($query); //melakukan query

//mengecek apakah username dan password ada di database
if($cek==TRUE){
        $_SESSION['username']=$username; 
        header("location:rumah_sakit.php");
}
else{
echo "<script> alert('Username atau Password Salah'); window.location = 'login.php'; </script>";
}
?>