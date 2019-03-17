<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boxlink - Bearlink</title>
    <?php include 'aset/builder/headinclude.php' ?>
  </head>
  <body>
    <?php include 'aset/builder/navbar.php'; ?>
    <div class="editor-container">
      <?php include 'aset/builder/actbutton.php'; ?>

      <!-- Pop Up Tambah URL Link -->
      <?php include 'aset/builder/popupAddUrl.php'; ?>

      <!-- Pop Up Tambah URL Whatsapp -->
      <?php include 'aset/builder/popupWhatsappUrl.php'; ?>

      <!-- Merubah Theme -->
      <?php include 'aset/builder/chooseTheme.php' ?>
      <div class="listDatalistDataNoGap">

          <?php include 'aset/builder/editformlink.php' ?>

      </div>
      <?php include 'aset/builder/footer.php' ?>
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
