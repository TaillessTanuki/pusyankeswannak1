<?php
  include "koneksidatabase.php";

  $nik  = $_POST['nik'];
  $nama_lengkap  = $_POST['nama_lengkap'];
  $email  = $_POST['email'];
  $password  = $_POST['password'];
  
  $mysqli  = "INSERT INTO tabel_data_pelamar (nik, nama_lengkap, email, password) VALUES ('$nik', '$nama_lengkap', '$email', '$password')";
  $result  = mysqli_query($conn, $mysqli);
  
  if ($result) {
    include("beranda-after-login.php");
  } else {
    echo "<script>alert('NIK SUDAH TERDAFTAR!');history.go(-1);</script>";
  }
  
  mysqli_close($conn);
?>