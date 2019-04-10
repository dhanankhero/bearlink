<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    
    include '../base/aset/php/bearConnection.php';
    $getUsername = $_GET['user'];
    $sql = "SELECT * FROM `sysdb_member` WHERE username = '".$getUsername."'";
    $sql2 = "SELECT * FROM `sysdb-$getUsername` WHERE `view-link`='checked' ORDER BY `sysdb-$getUsername`.`id` DESC";
    $query = mysqli_query($koneksi, $sql);
    $query2 = mysqli_query($koneksi,$sql2);
    
    ?>
    <link rel="stylesheet" type="text/css" media="screen" href="/bearlink/base/aset/skin/<?php while ($getUserDataTheme = mysqli_fetch_array($query)) { echo $getUserDataTheme['theme']; } ?>.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/bearlink/base/aset/css/eatme.css" />
    <title><?php echo $getUsername ?> - Bearlink</title>
    <style type="text/css">
        .spacing {height: 35px;}
    </style>
</head>
<body>
    <div class="spacing"></div>
    <div class="box-container">
        <div class="head">
            <div class="img-wrap">

            </div>
            <h2>
                <?php echo "@".$getUsername ?>
            </h2>
        </div>
        <div class="content-container">

            <?php 

                while($getUserData = mysqli_fetch_array($query)) {
                    echo $getUserData['email'];
                }
                echo "<ul>";
                while($getUserDataLink = mysqli_fetch_array($query2)) {
                    echo "
                    <a href='".$getUserDataLink['url-link']."' target='_blank' rel='noopener noreferrer nofollow'>
                        <li title='".$getUserDataLink['deskripsi-link']."'>".$getUserDataLink['name-link']."</li>
                    </a>
                    ";
                }
                echo "</ul>";
            
            ?>

        </div>
    </div>
    <div class="spacing"></div>
    <div class="bearlink" style="text-align:center"><a href="http://bearlink.id/" target="_blank" rel="noopener noreferrer">&copy; Bearlink 2019</a></div>
    <div class="spacing"></div>
    <div class="ads">
        
    </div>
</body>
</html>