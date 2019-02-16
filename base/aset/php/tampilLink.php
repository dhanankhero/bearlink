<ul id="sortable">

<?php

include 'bearConnection.php';
require_once 'session.php';

$sql = "SELECT * FROM `sysdb-$username` ORDER BY `sysdb-$username`.`sort` ASC";
$query = mysqli_query($koneksi,$sql);

while ($data = mysqli_fetch_array($query)){
  echo "
  <li class='ui-state-default' id='item-".$data['sort']."'>
    <div class='buttonData'> 
      <div class='viewStats'>
        <div class='shadow-stats' id='stats_".$data['id']."'>
          <div class='contentStatsContainer'>
            <div class='judulButtonPopUp'>
              <h1><i class='fas fa-times closePopUp' title='Tutup'></i>&nbsp; ".$data['name-link']."</h1>
            </div>
            <div class='contentStats'>".$data['stat-link']."</div>
            <div class='keterangan'>Total kunjungan</div>
          </div>
        </div>
      </div>
      <div class='buttonDataContainer'>
        <div class='dragMe fkiri ".$data['view-link']."status'>
          <i class='fas fa-ellipsis-v'></i>
        </div>
        <div class='buttonList fkiri mdle'>
          <div class='judulButton'>".$data['name-link']."</div>
          <div class='linkButton'><i>".$data['url-link']."</i></div>
        </div>
        <div class='linkTool'>
          <i class='fas fa-chart-line' id='statsButton_".$data['id']."' title='Total Kunjungan Link'></i>
          <a href='editlink.php?id=".$data['id']."'><i class='fas fa-cog' id='boxLink_".$data['id']."' title='Edit Link'></i></a>
          <i class='far fa-trash-alt' id='delete_".$data['id']."' style='color:red' title='Hapus Link'></i>
        </div>
        <div class='clr'></div>
        
        <div class='deleteShadowContainer' id='deleteLink_".$data['id']."'>
          <div class='shadownAddButton'></div>
            <div class='deleteDataContainer cnmd' id='dataDelete_".$data['id']."'>
              <div class='judulButtonPopUp'>
                <div class='editedTitlePopup fkiri'>
                  <h1><i class='fas fa-times closePopUp'></i>&nbsp;&nbsp;Delete ".$data['name-link']."</h1>
                </div>
                <div class='clr'></div>
              </div>
            <div class='deleteOptionContainer'>
              <a href='#'><div class='deleteOption fkiri' onclick='deleteLink(".$data['id'].")' >Ya</div></a>
              <a href='#'><div class='deleteOption fkiri closePopUp rekomendAct'>Tidak</div></a>
              <div class='clr'></div>
            </div>
          </div>
        </div>

        <script>
          $('.closePopUp').click(function(e) {
            $('.content-popup');
            e.preventDefault();
            $('.shadow-popup').fadeOut('fast');
          });
            $('#statsButton_".$data['id']."').click(function(s) {
              s.preventDefault();
              $('#stats_".$data['id']."').fadeIn('fast');
            });
          $('.closePopUp').click(function(s) {
            $('.content-popup');
            s.preventDefault();
            $('.shadow-stats').fadeOut('fast');
          });
          
          $(function() {
            $('#delete_".$data['id']."').click(function(c) {
              c.preventDefault();
              $('#deleteLink_".$data['id']."').fadeIn('fast');
            });
            $('.closePopUp').click(function(c) {
              $('#dataDelete_');
              c.preventDefault();
              $('#deleteLink_".$data['id']."').fadeOut('fast');
            });
          });

        // edit data
          function editLinkData(id) {
            $.ajax({
              url : 'aset/php/editDataLink.php',
              type : 'GET',
              data : 'id='+id,
              data : 'id='+i2,
              success : function(data) {
                $('.link-container').load('aset/php/tampilLinkViewMode.php');
                $('.listData').load('aset/php/tampilLink.php');
              }
            });
          };
        </script>

      </div>
    </div>
    </li>
  ";
 
}

 ?>

 </ul>

 <script>
  $( function() {
    $( "#sortable" ).sortable({ axis: "y",
                                cursor: "move",
                                containment: "parent",
                                // update: function (even,ui) {
                                //   var data = $(this).shortable('serialize');

                                //   //Update Database
                                //   $.ajax({
                                //     data: data,
                                //     type: 'POST',
                                //     url:  
                                //   });
                                // }
                              });
    $( "#sortable" ).disableSelection({ axis: "y" });
  } );
 </script>