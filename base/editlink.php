<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BearLink</title>
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
              <h1><i class='fas fa-times closePopUp'></i>&nbsp;&nbsp; Tambah URL</h1>
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
            $sql = "SELECT * FROM `sysdb-$username` WHERE id='$id'";
            $query = mysqli_query($koneksi,$sql);

            while ($data = mysqli_fetch_array($query)){ ?>

  				<div class="editTitle">

            <div id="kembaliBoxlink" class="algn-cntr hfull">
              <a href="boxlink.php" class="buttonActMaster">Kembali</a>
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
              }
            });
          });
        });
        </script>

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
