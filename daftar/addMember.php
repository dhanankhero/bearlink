<?php

include 'koneksi.php';

$id = base_convert(microtime(false), 15, 36);
$fullname = addslashes(trim($_POST['fullname']));
$username = addslashes(trim($_POST['username']));
$email = addslashes(trim($_POST['email']));
$password = md5($_POST['password']);

if (isset($_POST['daftar'])) {
      
    $sql = "INSERT INTO `sysdb_member` (`id_member`, `name`, `username`, `email`, `password`) VALUES ('$id', '$fullname', '$username', '$email', '$password')";
    $query = mysqli_query($koneksi,$sql);
    header("location:index.php");
 
  }
?>