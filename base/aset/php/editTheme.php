<?php

include 'bearConnection.php';
include 'session.php';

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $theme = $_POST['field'];

  $sql = "UPDATE `sysdb_member` SET `theme` = '$theme' WHERE `username` = '$username'";
  $query = mysqli_query($koneksi, $sql);

  header("location:../../boxlink.php");
}

 ?>
