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
        <div class="smallText paddingInput">Gunakan http:// atau https:// di awal link, Sangat di rekomendasikan Copy Paste</div>
        <input type="button" id="saveLink" name="saveLink" value="RAAAWWRR" class="submitURL">
        </div>
        </div>
    </form>
</div>

<script>
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
</script>