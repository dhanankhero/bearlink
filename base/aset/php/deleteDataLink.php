<?php

include 'bearConnection.php';
include 'session.php';

if (!empty($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `sysdb-$username` WHERE id = '$id'";
  mysqli_query($koneksi, $sql);
}

 ?>
