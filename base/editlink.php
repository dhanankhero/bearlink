<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BearLink</title>
    <link rel="stylesheet" href="aset/css/base.css">
    <link rel="stylesheet" href="aset/css/toggleBear.css">
    <link rel="stylesheet" href="aset/css/viewBear.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../base/aset/js/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <?php include 'bearConnection.php'; ?>
  </head>
  <body>

    <div class="navbar-container">
      <ul class="fkiri">
        <a href="">
          <li class="link-home">BEARLINK</li>
        </a>
        <a href="">
          <li>About Us</li>
        </a>
        <a href="">
          <li>Blog</li>
        </a>
        <a href="">
          <li>Contact</li>
        </a>
        <div class="clr"></div>
      </ul>
      <ul class="fkanan">
          <li class="boxData">https://bearlink.id/eat/foltibaffiid</li>
        <a href="">
          <li class="copyData">Copy</li>
        </a>
        <div class="clr"></div>
      </ul>
      <div class="clr"></div>
    </div>
    <div class="editor-container">
      <div class="addButton">
        <div class="addButtonLink">
          <a href="boxlink.php" class="buttonActMaster">Boxlink</a>
          <a href="#" class="buttonActMaster" id="addUrlData">Tambah URL</a>
          <a href="#" class="buttonActMaster" id="asda">Data URL</a>
        </div>
      </div>
      <div class="shadowContainerAddButton" id="shadowAddUrl">
        <div class="shadownAddButton"></div>
        <form id="addDataLink" action="index.html" method="post">
        <div class="addDataContainer cnmd">
          <div class="judulButtonPopUp">
            <div class="editedTitlePopup fkiri">
              <h1><i class='fas fa-times closePopUp'>Close</i> Tambah URL</h1>
            </div>
            <div class="lookMode fkanan">
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
      <script>

      </script>
      <div class="listData">

        <div id="editFormLink">
          <form class="" id="formEditLink" action="index.html" method="post">

            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM `sysdb-dhanank` WHERE id='$id'";
            $query = mysqli_query($koneksi,$sql);

            while ($data = mysqli_fetch_array($query)){ ?>

  				<div class="editTitle">

            <div id="kembaliBoxlink" class="algn-cntr hfull">
              <a href="#" class="buttonActMaster">Kembali</a>
            </div>
            <h1 class="titleSection judulEdit">Edit Data <?php echo $data['name-link']; ?></h1>
            <div class="lookMode fkanan mdle knn">
              <label class="switch">
                <input type="checkbox" name="checkView" <?php $checkView = $data['view-link']; if ($checkView == 'checked') { echo 'checked'; } else { echo 'unchecked'; } ?> >
                <span class="slider round"></span>
              </label>
            </div>
            <div class="clr"></div>
          </div>
  					<span class="standartSpan">Nama Link</span>



              <?php
                echo "
                <input type='hidden' name='id' value='".$data['id']."'>
      					<input class='standartForm' type='text' name='editNamaLink' value='".$data['name-link']."'>
      					<span class='standartSpan'>Url Link</span>
      					<input class='standartForm' type='text' name='editIsiLink' value='".$data['url-link']."'>
                <input class='standarSubmit' id='simpanEditLink' type='button' name='editData' value='Simpan'>
      					<input class='standarLogin' type='reset' name='' value='Reset'>
                "; ?>

              <?php } ?>
  				</form>
        </div>
        <script>
        //edit Data Link
        $(document).ready(function() {
          $('#simpanEditLink').click(function() {
            $.ajax({
              url: 'aset/php/editDataLink.php',
              type: 'post',
              data: $('#formEditLink').serialize(),
              success: function(d) {
                $('.link-container').load("aset/php/tampilLinkViewMode.php");
                $('.listData').load("aset/php/tampilLink.php");
              }
            });
          });
        });
        </script>
        <div id="listDataLink">
          <?php

          $sql = "SELECT * FROM `sysdb-dhanank` ORDER BY `sysdb-dhanank`.`id` ASC";
          $query = mysqli_query($koneksi,$sql);

          while ($data = mysqli_fetch_array($query)){
            echo "
            <div class='buttonData'>
            <div class='viewStats'>
            <div class='shadow-stats' id='stats_".$data['id']."'>
            <div class='contentStatsContainer'>
            <div class='judulButtonPopUp'>
            <h1><i class='fas fa-times closePopUp'>Close</i> ".$data['name-link']."</h1>
            </div>
            <div class='contentStats'>".$data['stat-link']."</div>
            <div class='keterangan'>Total kunjungan</div>
            </div>
            </div>
            </div>
            <div class='buttonDataContainer'>
            <div class='dragMe fkiri'>
            <i class='fas fa-ellipsis-v'>|</i>
            </div>
            <div class='buttonList fkiri mdle'>
            <div class='judulButton'>".$data['name-link']."</div>
            <div class='linkButton'>".$data['url-link']."</div>
            </div>
            <div class='linkTool'>
            <i class='fas fa-chart-line' id='statsButton_".$data['id']."'>Stats</i>
            <a href='editlink.php?id=".$data['id']."'><i class='fas fa-cog' id='boxLink_".$data['id']."'>Cog</i></a>
            <i class='far fa-trash-alt' id='delete_".$data['id']."' style='color:red'>Delete</i>
            </div>
            <div class='clr'></div>
            </div>
            </div>";

            echo "
            <div class='deleteShadowContainer' id='deleteLink_".$data['id']."'>
            <div class='shadownAddButton'></div>
            <div class='deleteDataContainer cnmd' id='dataDelete_".$data['id']."'>
            <div class='judulButtonPopUp'>
            <div class='editedTitlePopup fkiri'>
            <h1><i class='fas fa-times closePopUp'>Delete</i>&nbsp;&nbsp;Delete ".$data['name-link']."</h1>
            </div>
            <div class='clr'></div>
            </div>
            <div class='deleteOptionContainer'>
            <a href='#'><div class='deleteOption fkiri' onclick='deleteLink(".$data['id'].")' >Ya</div></a>
            <a href='#'><div class='deleteOption fkiri closePopUp rekomendAct'>Tidak</div></a>
            <div class='clr'>
            </div>
            </div>
            </div>
            </div>";

            echo "
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
              </script>";

            echo "
            <script>
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
            </script>";
          }

           ?>
        </div>

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

      $('#kembaliBoxlink').click(function(b) {
        $('#listDataLink').fadeIn('fast');
        $('#editFormLink').fadeOut('fast');
      })

      // Edit Link Data
      // function editLinkData(id) {
      //   $.ajax({
      //     url : "aset/php/editDataLink.php",
      //     type : "POST",
      //     data : 'id='+id,
      //     success : function(data) {
      //       $('.link-container').load("aset/php/tampilLinkViewMode.php");
      //       $('.listData').load("aset/php/tampilLink.php");
      //     }
      //   });
      // };
    </script>

  </body>
</html>