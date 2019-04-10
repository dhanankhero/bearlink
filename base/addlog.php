<?php include 'aset/php/session.php'?>
<!DOCTYPE html>
<html lang="id" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>BearLink</title>
		<?php include "aset/builder/headinclude.php" ?>
	</head>
	<body>

		<?php

		$userip = getClientIp();
		$userbrowser = getClientBrowser();
		$useros = $_SERVER['HTTP_USER_AGENT'];

		$sql = "INSERT INTO `logtoin-$username` (`id`, `logtoin-ip`, `logtoin-browser`, `logtoin-os`, `logtoin-waktu`) VALUES (NULL, '$userip', '$userbrowser', '$useros', NULL)";
		$query = mysqli_query($koneksi, $sql);

        if ($query) {
            header("location:index.php");
        }   else {
            echo "salah anjink";
        }

		?>

	</body>
</html>
