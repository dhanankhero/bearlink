<?php

include 'bearConnection.php';

$sqlView = "SELECT * FROM `sysdb-dhanank` ORDER BY `sysdb-dhanank`.`id` ASC";
$queryView = mysqli_query($koneksi,$sqlView);

while ($dataView = mysqli_fetch_array($queryView)){

echo "<div class='style-button'>";
echo "<a href='".$dataView['url-link']."' class='link'>";
echo "<div class='button'>";
echo $dataView['name-link'];
echo "</div>";
echo "</a>";
echo "</div>";

}

 ?>
