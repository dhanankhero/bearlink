<?php

include 'bearConnection.php';
include 'session.php';

if (!empty($_POST['id'])) {
  $id = $_POST['id'];
  $namaLink = $_POST['editNamaLink'];
  $isiLink = $_POST['editIsiLink'];
  $deskripsiLink = $_POST['deskripsiLink'];
  $checkView = $_POST['checkView'];

  if ($checkView == 'on') {
    $checkView = 'checked';
  }
  else {
    $checkView = 'unchecked';
  }

  $sql = "UPDATE `sysdb-$username` SET `name-link` = '$namaLink', `url-link` = '$isiLink', `deskripsi-link` = '$deskripsiLink', `view-link` = '$checkView' WHERE `id` = $id";
  $query = mysqli_query($koneksi, $sql);
}

 ?>
