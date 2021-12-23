<?php
  include "koneksidatabase.php";

  $nama_admin  = $_POST['nama_admin'];
  $username  = $_POST['username'];
  $email  = $_POST['email'];
  $password  = $_POST['password'];
  
  $mysqli  = "INSERT INTO tabel_admin (nama_admin, username, email, password) VALUES ('$nama_admin', '$username', '$email', '$password')";
  $result  = mysqli_query($conn, $mysqli);
  
  if ($result) {
    include("admin-dashboard.php");
  } else {
    echo "<script>alert('USERNAME SUDAH TERDAFTAR!');history.go(-1);</script>";
  }
  
  mysqli_close($conn);
?>