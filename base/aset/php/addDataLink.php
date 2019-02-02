<?php
  include 'bearConnection.php';
  include 'session.php';

  $namaLink = $_POST['namaLink'];
  $isiLink = $_POST['isiLink'];
  $checkView = $_POST['checkView'];
  if ($checkView == 'on') {
    $dataCheck = 'checked';
  }
  else {
    $dataCheck = 'unchecked';
  }
  
  $sql = "INSERT INTO `sysdb-$username` (`id`, `name-link`, `url-link`, `view-link`, `stat-link`) VALUES (NULL, '$namaLink', '$isiLink', '$dataCheck', '0');";
  $sql_bigData = "SELECT max(sort) FROM `sysdb-$username`";

  if($koneksi -> query($sql))
  {
    echo "Data Tersimpan";
  }

  $query = mysqli_query($koneksi, $sql_bigData);

 ?>
