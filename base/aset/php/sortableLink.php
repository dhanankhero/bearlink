<?php

$i = 0;

foreach ($_POST['item'] as $value) {
    $sql = 'UPDATE `sysdb-$username` SET `sort` = $i WHERE  ';
}

?>