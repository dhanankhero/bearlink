<?php

include 'base/bearConnection.php';

session_start();

if(isset($_POST['submit'])) {
  $username = addslashes(trim($_POST['username']));
  $password = md5($_POST['password']);
  $query = "SELECT * FROM `sysdb-login` WHERE username = '$username' and password = '$password'";
  $data = mysqli_query($koneksi, $query);
  if (mysqli_num_rows($data)) {
    $row = mysqli_fetch_assoc($data);
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header("location: /bearlink/base/boxlink.php");
  } else {
    $message = "Username dan Password salah";
    header("location: /bearlink/base/boxlink.php");
  }
}

 ?>
