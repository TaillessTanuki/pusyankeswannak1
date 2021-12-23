<?php

include 'koneksidatabase.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM tabel_admin WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0)

{
    header("location:admin-dashboard.php");
} 

else

{
    echo "<script>alert('USERNAME/PASSWORD SALAH!');history.go(-1);</script>";
}

mysqli_close($conn); 

?>