<?php

include 'bearConnection.php';
require_once 'session.php';

$sqlView = "SELECT * FROM `sysdb-$username` WHERE `view-link`='checked' ORDER BY `sysdb-$username`.`id` DESC";
$queryView = mysqli_query($koneksi,$sqlView);

while ($dataView = mysqli_fetch_array($queryView)){

echo "
<div class='style-button' title='".$dataView['deskripsi-link']."'>
<a href='".$dataView['url-link']."' class='link'>
<div class='button'>
".$dataView['name-link']."
</div>
</a>
</div>";

}

 ?>
