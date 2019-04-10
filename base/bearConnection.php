<?php
  // data database
  $koneksi = mysqli_connect("localhost", "root", "", "eatsalmonbox");

  // Cek database
  if (mysqli_connect_errno()) {
    echo "Waah ga ada makanan nih";
  }

 ?>
