<!-- <?php require_once 'aset/php/session.php' ?> -->
<div class="navbar-container">
  <ul class="fkiri">
    <a href="../">
      <li class="link-home">BEARLINK</li>
    </a>
    <a href="">
      <li>Free Tips</li>
    </a>
    <div class="clr"></div>
  </ul>
  <ul class="fkanan">
    <li class="boxData">https://bearlink.id/u/<?php echo $username ?></li>
    <a href="#"><li id="salin" class="copyData" data-clipboard-text="https://bearlink.id/u/<?php echo $username ?>">Salin Link</li></a>
    <a href="#" id="akun"><li class="copyData" id="nama-akun"><?php echo $name ?></li></a>
    <div class="clr"></div>
  </ul>
  <div class="clr"></div>
</div>
<script src="../base/aset/clipboard/dist/clipboard.min.js"></script>
<script>
  var copyToIn = new ClipboardJS('#salin');

  copyToIn.on('success', function(e) {
    console.log(e);
    alert('Link sudah Tersalin!');
  });
  copyToIn.on('error', function(e) {
    console.log(e);
  });
</script>
<?php include 'optionAccount.php' ?>