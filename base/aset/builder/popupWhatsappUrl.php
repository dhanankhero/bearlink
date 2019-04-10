<div class="shadowContainerWhatsappButton" id="shadowWhatsappUrl">
    <div class="shadownWhatsappButton"></div>
    <form id="whatsappDataLink" action="index.html" method="post">
    <div class="whatsappDataContainer cnmd">
        <div class="judulButtonPopUp">
        <div class="editedTitlePopup fkiri">
            <h1><i class='fas fa-times closePopUp'></i>&nbsp;&nbsp;Whatsapp URL</h1>
        </div>
        <div class="lookMode fkanan posMiddle">
            <label class="switch">
            <input type="checkbox" name="checkView">
            <span class="slider round"></span>
            </label>
        </div>
        <div class="clr"></div>
        </div>
        <div class="whatsappDataFormContainer">
        <input type="text" name="namaLink" value="" id="inputUrlName" class="urlCustom" placeholder="Link Name"><br/>
        <input type="number" name="isiLink" value="" id="inputUrlData" class="urlCustom" placeholder="Nomer Whatsapp">
        <div class="smallText paddingInput">Gunakan 62 untuk negara Indonesia</div>
        <input type="button" id="saveLinkWhatsapp" name="saveLink" value="RAAAWWRR" class="submitURL">
        </div>
        </div>
    </form>
</div>
<script>
//add Whatsapp
$('#addPesanWhatsapp').click(function(a) {
    a.preventDefault();
    $('.shadowContainerWhatsappButton').fadeIn('fast');
    inputUrlName.value = '';
    inputUrlData.value = '';
});
$('.closePopUp').click(function(a) {
    $('.whatsappDataContainer');
    a.preventDefault();
    $('.shadowContainerWhatsappButton').fadeOut('fast');
});

//add Whatsapp Live
$(document).ready(function() {
    $('#saveLinkWhatsapp').click(function() {
        $.ajax({
        url: 'aset/php/addWhatsappLink.php',
        type: 'post',
        data: $('#whatsappDataLink').serialize(),
        success: function(d) {
            $('.shadowContainerWhatsappButton').fadeOut('fast');
            $('.link-container').load("aset/php/tampilLinkViewMode.php");
            $('.listData').load("aset/php/tampilLink.php");
        }
        });
    });
});
</script>