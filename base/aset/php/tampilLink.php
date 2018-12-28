<?php

include 'bearConnection.php';

$sql = "SELECT * FROM `sysdb-dhanank` ORDER BY `sysdb-dhanank`.`id` ASC";
$query = mysqli_query($koneksi,$sql);

while ($data = mysqli_fetch_array($query)){
  echo "<div class='buttonData'><div class='viewStats'><div class='shadow-stats' id='stats_".$data['id']."'><div class='contentStatsContainer'><div class='judulButtonPopUp'><h1><i class='fas fa-times closePopUp'></i> ".$data['name-link']."</h1></div><div class='contentStats'>".$data['stat-link']."</div><div class='keterangan'>Total kunjungan</div></div></div></div><div class='shadow-popup' id='shadow_".$data['id']."'><div class='content-popup cnmd'><div class='judulButtonPopUp'><div class='editedTitlePopup fkiri'><h1><i class='fas fa-times closePopUp'></i> Edit ".$data['name-link']."</h1></div><div class='lookMode fkanan'><label class='switch'><input type='checkbox' ".$data['view-link']."><span class='slider round' title='View Mode'></span></label></div><div class='clr'></div></div><div class='popUpContentContainer'><form class='' action='index.html' method='post'><input type='text' name='' value='".$data['name-link']."' class='urlCustom'><input type='text' name='' value='".$data['url-link']."' class='urlCustom'><input type='submit' name='' value='RAAAWWRR' class='submitURL'></form></div></div></div><div class='buttonDataContainer'><div class='dragMe fkiri'><i class='fas fa-ellipsis-v'></i></div><div class='buttonList fkiri mdle'><div class='judulButton'>".$data['name-link']."</div><div class='linkButton'>".$data['url-link']."</div></div><div class='linkTool'><i class='fas fa-chart-line' id='statsButton_".$data['id']."'></i><i class='fas fa-cog' id='boxLink_".$data['id']."'></i><i class='far fa-trash-alt' id='delete_".$data['id']."' style='color:red'></i></div><div class='clr'></div></div></div>";

  echo "<div class='deleteShadowContainer' id='deleteLink_".$data['id']."'><div class='shadownAddButton'></div><div class='deleteDataContainer cnmd' id='dataDelete_".$data['id']."'><div class='judulButtonPopUp'><div class='editedTitlePopup fkiri'><h1><i class='fas fa-times closePopUp'></i>&nbsp;&nbsp;Delete ".$data['name-link']."</h1></div><div class='clr'></div></div><div class='deleteOptionContainer'><a href='#' ><div class='deleteOption fkiri' onclick='deleteLink(".$data['id'].")' >Ya</div></a><a href='#'><div class='deleteOption fkiri closePopUp rekomendAct'>Tidak</div></a><div class='clr'></div></div></div></div>";

  echo "<script>$(function() { $('#boxLink_".$data['id']."').click(function(e) { e.preventDefault();$('#shadow_".$data['id']."').fadeIn('fast');});$('.closePopUp').click(function(e) { $('.content-popup');e.preventDefault();$('.shadow-popup').fadeOut('fast');});$('#statsButton_".$data['id']."').click(function(s) { s.preventDefault();$('#stats_".$data['id']."').fadeIn('fast');});$('.closePopUp').click(function(s) { $('.content-popup');s.preventDefault();$('.shadow-stats').fadeOut('fast');});});</script>";

  echo "<script>$(function() { $('#delete_".$data['id']."').click(function(c) { c.preventDefault(); $('#deleteLink_".$data['id']."').fadeIn('fast'); }); $('.closePopUp').click(function(c) { $('#dataDelete_'); c.preventDefault(); $('#deleteLink_".$data['id']."').fadeOut('fast'); }); });</script>";
}

 ?>
