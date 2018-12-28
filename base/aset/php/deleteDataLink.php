<?php

include 'bearConnection.php';

if (!empty($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM `sys-dhanank` WHERE id = '$id'";
}

 ?>
