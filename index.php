<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bearlink</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>

    <section id="navbar">
        <nav class="bear-navbar">
            <div class="t-center">
                Bearlink
            </div>
            <div class="navbar-item">
                <ul>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <li>Blog</li>
                    </a>
                    <a href='#' rel='noopener noreferrer' id='login-click'>
                        <li>Login</li>
                    </a>
                </ul>
            </div>
        </nav>
    </section>

    <section id="jumbotron">
        <div class="bear-container">
            <div class="contentron">
                <h1>Lorem Ipsum</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa porro perspiciatis hic similique mollitia, ullam odit eos voluptate asperiores. Autem quidem temporibus fugit recusandae laborum ut magnam ipsa molestias magni.</p>
            </div>
        </div>


    </section>

    <section id="login">
        <div class="login-container">
            <div id="navigasi-login">
                <div class="nl-login">Login</div>
                <div class="nl-register">Register</div>
                <div class="clr"></div>
            </div>
            <div id="login-hide" class="login">
                <h3>Login</h3>
                <form action="checkRhino.php" method="post">
                    <input type="text" name="username" id="login-username1" class="form-design" placeholder="Email" autocomplete="email">
                    <input type="password" name="password" id="login-password1" class="form-design" placeholder="Password">
                    <input type="submit" value="masuk" class="submit-design">
                </form>
            </div>
            <div id="register-hide" class="register">
                <h3>Register</h3>
                <form action="addMember.php" method="post">
                    <input type="text" name="fullname" id="login-fullname" class="form-design" placeholder="Nama Panjang">
                    <input type="text" name="username" id="login-username" class="form-design" placeholder="Username">
                    <input type="email" name="email" id="login-email" class="form-design" placeholder="Email" autocomplete="email">
                    <input type="password" name="password" id="login-password" class="form-design" placeholder="password">
                    <input type="submit" value="daftar" name="daftar" class="submit-design">
                </form>
            </div>

        </div>
    </section>

    <section id="footer">
        <footer>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    Disclaimer
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    About
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer">
                    Kebijakan Privasi
                </a>
                <div class="clr"></div>
        </footer>
    </section>

    <script>
        $('#login-click').click(function(e) {
            e.preventDefault;
            var dobelKlik = $(this).data('dobelKlik');
            if (dobelKlik) {
                $('#login').fadeOut('fast');
            }   else {
                $('#login').fadeIn('fast');
            }
            $(this).data('dobelKlik', !dobelKlik);

        });

        // Tap Login
        $('.nl-login').css({'background':'#fff','cursor':'unset'})
        $('.nl-register').css({'background':'#eee','cursor':'pointer'})
        $('.nl-register').click(function(e) {
            e.preventDefault();
            $('#register-hide').show();
            $('#login-hide').hide();
            $('.nl-login').css({'background':'#eee','cursor':'pointer'})
            $('.nl-register').css({'background':'#fff','cursor':'unset'})
        });
        $('.nl-login').click(function(e) {
            e.preventDefault();
            $('#login-hide').show();
            $('#register-hide').hide();
            $('.nl-register').css({'background':'#eee','cursor':'pointer'})
            $('.nl-login').css({'background':'#fff','cursor':'unset'})
        })
    </script>

</body>
</html>
