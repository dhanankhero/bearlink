<?php
// mengaktifkan session
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = addslashes(trim($_POST['username']));
$password = md5($_POST["password"]);

// menyeleksi data
$data = mysqli_query($koneksi, "SELECT * FROM sysdb_member WHERE username='$username' AND password='$password'");

//menghitung jumlah data yg ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:target-login.php");
} else {
  header("location:index.html?pesan=gagal");
}
 ?>
