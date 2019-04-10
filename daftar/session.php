<?php
session_start();
if ($_SESSION['status']!="login") {
  header("location:..?index.php?pesan=belum_login");
}
// memanggil file koneksi.php
include 'koneksi.php';
// membuat variable $namaakun
$namaakun = $_SESSION['username'];
// memilih database
mysqli_select_db($koneksi,"eatsalmonbox");
// query sql
$sqlstr = "select * from sysdb_member where username = '$namaakun'";
$hasil = mysqli_query($koneksi, $sqlstr);
// menampilkan data
$data = mysqli_fetch_assoc($hasil);

$id_member = $data['id_member'];
$name = $data['name'];
$username = $data['username'];
$email = $data['email'];
$password = $data['password'];
 ?>
