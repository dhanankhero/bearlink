<!DOCTYPE html>
<html lang="id" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>BearLink</title>
		<link rel="stylesheet" href="style.css">
		<link rel="sty lesheet" href="base/aset/font/bearfont.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="base/aset/js/jquery-3.3.1.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
		<?php include 'session.php' ?>
		<?php include 'base/aset/php/brain.php' ?>
	</head>
	<body>
		
		<?php

		$userip = getClientIp();
		$userbrowser = getClientBrowser();
		$useros = getClientOs();

		$sql = "INSERT INTO `logtoin-$username` (`id`, `logtoin-ip`, `logtoin-browser`, `logtoin-os`, `logtoin-waktu`) VALUES (NULL, '$userip', '$userbrowser', '$useros', NULL)";
		$query = mysqli_query($koneksi, $sql);

		header("location:boxlink.php");

		?>
		
	</body>
</html>
