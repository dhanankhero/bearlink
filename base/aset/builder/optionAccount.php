<section id="account-menu">
    <div class="menu-container">
        <ul>
            <a href="http://" target="_blank" rel="noopener noreferrer">
                <li>Menu 1</li>
            </a>
            <a href="http://" target="_blank" rel="noopener noreferrer">
                <li>Menu 2</li>
            </a>
            <a href="http://" target="_blank" rel="noopener noreferrer">
                <li>Menu 3</li>
            </a>
            <a href="http://" target="_blank" rel="noopener noreferrer">
                <li>Menu 4</li>
            </a>
            <a href="logout.php" rel="noopener noreferrer">
                <li>Keluar</i></li>
            </a>
        </ul>
    </div>
</section>

<script>
    // $('#akun').click(function(e) {
    //     e.preventDefault();
    //     $('#account-menu').fadeIn('fast');
    //     $('#nama-akun').css('backgroundColor','#35908a');
    // });
    //fungsi untuk tombol rubah tema
    $('#akun').click(function(e) {
            e.preventDefault;
            var dobelKlik = $(this).data('dobelKlik');
            if (dobelKlik) {
                $('#account-menu').fadeOut('fast');
            }   else {
                $('#account-menu').fadeIn('fast');
            }
            $(this).data('dobelKlik', !dobelKlik);

        });
</script>