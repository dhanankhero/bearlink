<?php
session_start();
if ($_SESSION['status']!="login") {
  header("location:..?index.php?pesan=belum_login");
}
// memanggil file koneksi.php
include 'bearConnection.php';
// membuat variable $namaakun
$namaakun = $_SESSION['username'];
// memilih database
mysqli_select_db($koneksi,"eatsalmonbox");
// query sql
$sqlstr = "select * from sysdb_member where username = '$namaakun'";
$hasil = mysqli_query($koneksi, $sqlstr);
// menampilkan data
$data_cloud = mysqli_fetch_assoc($hasil);

$id_member = $data_cloud['id_member'];
$name = $data_cloud['name'];
$username = $data_cloud['username'];
$email = $data_cloud['email'];
$password = $data_cloud['password'];
 ?>
