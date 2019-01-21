<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boxliink - BearLink</title>
    <link rel="stylesheet" href="aset/css/base.css">
    <link rel="stylesheet" href="aset/css/toggleBear.css">
    <link rel="stylesheet" href="aset/font/bearfont.css">
    <link rel="stylesheet" href="aset/css/viewBear.css">
    <link rel="stylesheet" href="aset/css/scrollBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../base/aset/js/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <?php include 'bearConnection.php'; ?>
    <?php include 'aset/php/session.php'?>
  </head>
  <body>
    <?php include 'aset/builder/navbar.php'; ?>
    <div class="editor-container">
      <?php include 'aset/builder/actbutton.php'; ?>
      <div class="shadowContainerAddButton" id="shadowAddUrl">
        <div class="shadownAddButton"></div>
        <form id="addDataLink" action="index.html" method="post">
        <div class="addDataContainer cnmd">
          <div class="judulButtonPopUp">
            <div class="editedTitlePopup fkiri">
              <h1><i class='fas fa-times closePopUp'></i>&nbsp;&nbsp;Tambah URL</h1>
            </div>
            <div class="lookMode fkanan posMiddle">
              <label class="switch">
                <input type="checkbox" name="checkView">
                <span class="slider round"></span>
              </label>
            </div>
            <div class="clr"></div>
          </div>
          <div class="addDataFormContainer">
              <input type="text" name="namaLink" value="" id="inputUrlName" class="urlCustom" placeholder="Link Name"><br/>
              <input type="text" name="isiLink" value="" id="inputUrlData" class="urlCustom" placeholder="Link URL">
              <input type="button" id="saveLink" name="saveLink" value="RAAAWWRR" class="submitURL">
          </div>
        </div>
      </form>
      </div>

      <div class="listData">

        <ul id="sortable">

        <?php

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
                  <div class='linkButton'>".$data['url-link']."</div>
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

            echo "
            ";

            echo "
            ";

            echo "
            ";
          }

          ?>


        </ul>

      </div>
    </div>

    <div class='view'>

      <?php

      echo "<div class='header'>";
      echo "<div class='foto'>";
      echo "<img src='http://dhunsdevice/avatar/7.JPG' alt=''>";
      echo "</div>";
      echo "<div class='nama'>";
      echo "@timunmuslim";
      echo "</div>";
      echo "</div>";
      echo "<div class='link-container'>";

      include 'aset/php/tampilLinkViewMode.php';

      echo "</div>";

       ?>

    </div>

    <script type="text/javascript">

      var inputUrlName = document.getElementById('inputUrlName');
      var inputUrlData = document.getElementById('inputUrlData');

      //add Data
      $('#addUrlData').click(function(a) {
        a.preventDefault();
        $('.shadowContainerAddButton').fadeIn('fast');
        inputUrlName.value = '';
        inputUrlData.value = '';
      });
      $('.closePopUp').click(function(a) {
        $('.addDataContainer');
        a.preventDefault();
        $('.shadowContainerAddButton').fadeOut('fast');
      });

      //add Data Live
      $(document).ready(function() {
        $('#saveLink').click(function() {
          $.ajax({
            url: 'aset/php/addDataLink.php',
            type: 'post',
            data: $('#addDataLink').serialize(),
            success: function(d) {
              $('.shadowContainerAddButton').fadeOut('fast');
              $('.link-container').load("aset/php/tampilLinkViewMode.php");
              $('.listData').load("aset/php/tampilLink.php");
            }
          });
        });
      });

      // Delete Link Data
      function deleteLink(id) {
        $.ajax({
          url : "aset/php/deleteDataLink.php",
          type : "POST",
          data : 'id='+id,
          success : function(data) {
            $('.link-container').load("aset/php/tampilLinkViewMode.php");
            $('.listData').load("aset/php/tampilLink.php");
          }
        });
      };
      
      $( function() {
        $( "#sortable" ).sortable({ axis: "y", cursor: "move", containment: "parent" });
        $( "#sortable" ).disableSelection({ axis: "y" });
      } );
    </script>

  </body>
</html>
