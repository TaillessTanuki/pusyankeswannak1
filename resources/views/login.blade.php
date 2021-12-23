<?php

include 'koneksidatabase.php';

$nik = $_POST['nik'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM tabel_data_pelamar WHERE nik='$nik' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0)

{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    header("location:beranda-after-login.php");
} 

else

{
    echo "<script>alert('NIK/PASSWORD SALAH!');history.go(-1);</script>";
}

mysqli_close($conn); 

?>