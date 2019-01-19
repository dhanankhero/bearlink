<?php

include 'bearConnection.php';

$sqlView = "SELECT * FROM `sysdb-dhanank` WHERE `view-link`='checked' ORDER BY `sysdb-dhanank`.`id` ASC";
$queryView = mysqli_query($koneksi,$sqlView);

while ($dataView = mysqli_fetch_array($queryView)){

echo "
<div class='style-button'>
<a href='".$dataView['url-link']."' class='link'>
<div class='button'>
".$dataView['name-link']."
</div>
</a>
</div>";

}

 ?>
