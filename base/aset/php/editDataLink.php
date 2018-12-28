<?php

include 'bearConnection.php';

if (!empty($_POST['editId'])) {
  $id = $_POST['editId'];
  $namaLink = $_POST['editNamaLink'];
  $isiLink = $_POST['editIsiLink'];
  $checkView = $_POST['editCheckView'];

  if ($checkView == 'on') {
    $dataCheck = 'checked';
  }
  else {
    $dataCheck = 'unchecked';
  }

  $sql = "UPDATE `sysdb-dhanank` SET `name-link` = '$namaLink', `url-link` = '$isiLink', `view-link` = '$checkView' WHERE `sysdb-dhanank`.`id` = $id";
  mysqli_query($koneksi, $sql);
}

 ?>
