

<section id="edit-container">
  <div id="list-button">
    <div class="list-button-data-container">
      <ul>
      <li class='nav-kembali'><a href='index.php'>Kembali</a></li>
      <?php

      $sql = "SELECT * FROM `sysdb-$username` ORDER BY `sysdb-$username`.`id` DESC";
      $query = mysqli_query($koneksi,$sql);

      while ($data = mysqli_fetch_array($query)){
        echo "
        
        <li><a href='edit.php?id=".$data['id']."'>".$data['name-link']."</a></li>
        ";
      }

      ?>
      </ul>
    </div>
  </div>
  <div id="edit-panel">
  <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `sysdb-$username` WHERE id='$id'";
    $query = mysqli_query($koneksi,$sql);

    while ($data = mysqli_fetch_array($query)){ ?>
    <div class="title">
      <h4>Edit</h4>
      <h2><?php echo $data['name-link'] ?></h2>
    </div>
    <div class="form-edit">
      <form id="formEditLink" action="" method="post">
      <table id="layout">
        <tr>
          <?php
          echo "
          <td class='label'><label for='view'>Tampilkan</label>
          <input type='hidden' name='id' value='".$data['id']."'>
          </td>
          <td class='value'>
            <label class='switch'>
              <input type='checkbox' name='checkView'";
                $checkView = $data['view-link']; if ($checkView == 'checked') { echo 'checked'; } else { echo 'unchecked'; };
              echo ">
              <span class='slider round'></span>
            </label>
          </td>
          "
          ?>
        </tr>
        <tr>
          <?php
            echo "
              <td class='label'><label for='nameLink'>Nama Link</label></td>
              <td class='value'><input type='text' class='bl-input' name='editNamaLink' id='nameLink' maxlength='20' title='Maksimal 20 Huruf' value='".$data['name-link']."'></td>
            "
          ?>
        </tr>
        <tr>
          <?php
            echo "
              <td class='label'><label for='urlLink'>Url Link</label></td>
              <td class='value'><input type='url' class='bl-input' name='editIsiLink' id='urlLink' value='".$data['url-link']."'></td>
            "
          ?>
        </tr>
        <tr>
          <?php
            echo "
              <td class='label'><label for='deskripsi'>Deskripsi Link</label></td>
              <td class='value'><input type='url' class='bl-input' name='deskripsiLink' id='deskripsi' maxlength='180' title='Maksimal 180 Huruf' value='".$data['deskripsi-link']."'></td>
            "
          ?>
        </tr>
        <tr>
          <td class="action" colspan="2">
            <input type="button" class="bl-submit bl-save" name="editData" id="simpanEditLink" value="Simpan">
            <input type="reset" class="bl-submit" name="" id="" value="Reset">
          </td>
        </tr>
      </table>
    </form>
    </div>
  </div>
  <?php } ?>
  <div class="clr"></div>
</section>
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