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

        <?php include 'aset/php/tampilLink.php'; ?>

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
