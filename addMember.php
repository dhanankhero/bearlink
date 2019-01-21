<?php

include 'koneksi.php';

$id = base_convert(microtime(false), 15, 36);
$fullname = addslashes(trim($_POST['fullname']));
$username = addslashes(trim($_POST['username']));
$email = addslashes(trim($_POST['email']));
$password = md5($_POST['password']);

if (isset($_POST['daftar'])) {
      
    $sql = "INSERT INTO `sysdb_member` (`id_member`, `name`, `username`, `email`, `password`) VALUES ('$id', '$fullname', '$username', '$email', '$password')";
    $sql_addTable = "CREATE TABLE `sysdb-$username` ( `id` int(5) NOT NULL AUTO_INCREMENT, `name-link` varchar(20) DEFAULT NULL, `url-link` text NOT NULL, `view-link` varchar(20) NOT NULL, `stat-link` int(10) NOT NULL, `sort` int(10) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1";
    $query = mysqli_query($koneksi,$sql);
    $query_addTable = mysqli_query($koneksi,$sql_addTable);
    header("location:index.php");
 
  }
?>