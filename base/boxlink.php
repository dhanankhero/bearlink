<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boxliink - BearLink</title>
    <?php include 'aset/builder/headinclude.php' ?>
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
      <?php include 'aset/builder/chooseTheme.html' ?>
      <div class="listData">

          <?php include 'aset/php/tampilLink.php' ?>

      </div>
    </div>

    <div class='view'>

      <?php

      echo "<div class='header'>
      <div class='foto'>
      <img src='http://dhunsdevice/avatar/7.JPG' alt=''>
      </div>
      <div class='nama'>";
      echo "@" . $username;
      echo "</div>
      </div>
      <div class='link-container'>";

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
