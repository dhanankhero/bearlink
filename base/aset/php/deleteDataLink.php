<?php

include 'bearConnection.php';

if (!empty($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `sysdb-dhanank` WHERE id = '$id'";
  mysqli_query($koneksi, $sql);
}

 ?>
