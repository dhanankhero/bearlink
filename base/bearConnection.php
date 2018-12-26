<?php
  // data database
  $koneksi = mysqli_connect("localhost", "root", "", "eatSalmonBox");

  // Cek database
  if (mysqli_connect_errno()) {
    echo "Waah ga ada makanan nih";
  }

 ?>
