<?php
session_start();
if ($_SESSION['status']!="login") {
  header("location:index.php?pesan=belum_login");
}
// memanggil file koneksi.php
include 'bearConnection.php';
// membuat variable $namaadmin
$namaadmin = $_SESSION['username'];
// memilih database
mysqli_select_db($koneksi,"flabs");
// query sql
$sqlstr = "select * from user where user_username = '$namaadmin'";
$hasil = mysqli_query($koneksi, $sqlstr);
// menampilkan data
$data = mysqli_fetch_assoc($hasil);

$firstname = $data['firstname'];
$lastname = $data['lastname'];
$email = $data['email'];
$phone = $data['phone'];
$jobs = $data['jobs'];
$login = $data['login'];
$logout = $data['logout'];
$statusonline = $data['statusonline'];
 ?>
