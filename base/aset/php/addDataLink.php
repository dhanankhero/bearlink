<?php
  include 'bearConnection.php';

  $namaLink = $_POST['namaLink'];
  $isiLink = $_POST['isiLink'];
  $checkView = $_POST['checkView'];
  if ($checkView == 'on') {
    $dataCheck = 'checked';
  }
  else {
    $dataCheck = 'unchecked';
  }
  $sql = "INSERT INTO `sysdb-dhanank` (`id`, `name-link`, `url-link`, `view-link`, `stat-link`) VALUES (NULL, '$namaLink', '$isiLink', '$dataCheck', '0');";

  if($koneksi -> query($sql))
  {
    echo "Data Tersimpan";
  }

 ?>
