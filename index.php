  <!DOCTYPE html>
<html lang="id" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>BearLink</title>
		<link rel="stylesheet" href="style.css">
		<link rel="sty lesheet" href="base/aset/font/bearfont.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="base/aset/js/jquery-3.3.1.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
	</head>
	<body>
		
		<section id="navbar-container">
			<div id="hamburger" class="menu-act">
				=
			</div>
		</section>

		<section id="loginside">
			<div class="logincontainer">
				<div class="control-container">
					<div class="bt-control fleft bt-selected">Login</div>
					<div id="bt-login" class="bt-control fleft">Register</div>
					<div id="bt-register" class="clear"></div>
				</div>
				<div id="login" class="switch-metode">
					<h2>Login</h2>
					<p>Silahkan masukkan username dan password untuk login ke akun kamu</p>
					<form action="checkRhino.php" method="post">
						<label for="username">Username</label><br/>
						<input type="text" name="username" class="inputForm"><br/>
						<label for="password">Password</label><br/>
						<input type="password" name="password" class="inputForm"><br/>
						<input type="submit" value="Login">
					</form>
				</div>
				<div id="register" class="switch-metode">
					<h2>Register</h2>
					<p>Silahkan lengkapi form dibawah ini untuk dapat bergabung dengan kami</p>
					<form action="addMember.php" method="post">
						<label for="fullname">Nama Lengkap</label><br/>
						<input type="text" name="fullname" class="inputForm"><br/>
						<label for="username">Username</label><br/>
						<input type="text" name="username" class="inputForm"><br/>
						<label for="email">E-mail</label><br/>
						<input type="email" name="email" class="inputForm"><br/>
						<label for="password">Password</label><br/>
						<input type="password" name="password" class="inputForm"><br/>
						<input type="submit" name="daftar" value="Register">
					</form>
				</div>
			</div>
			
		</section>

		<section id="container-main">
			
			<section id="header" class="main-design">
				<header class="cnmd">
					<h1 class="logo">
						bearlink.id
					</h1>
					<p>
						Maksimalkan keterbatasan mu
					</p>
				</header>
			</section>
			<section id="kemudahan" class="main-design big-banner">
				<div class="format-1">
					<h1 class="judul">
						Semudah Membalikkan Telapak tangan
					</h1>
					<p>
						Kami memaksimalkan kemudahan penggunaan, input URL, dan juga pengakses-an
					</p>
				</div>
			</section>
			<section id="kebebasan" class="main-design big-banner">
				<div class="format-1">
					<h1 class="judul">
						Bebas dan Tak Terbatas
					</h1>
					<p>
						Simpan berapapun jumlah Link mu di sini tak terkecuali, Gratis dan Tak Terbatas
					</p>
				</div>
			</section>
			<section id="footer" class="footer">
				<div class="footer-container">
					<div class="col-4 link">
						<ul>
							<li><a href="http://" target="_blank" rel="noopener noreferrer">About us</a></li>
							<li><a href="http://" target="_blank" rel="noopener noreferrer">Blog</a></li>
						</ul>
					</div>
					<div class="col-4 link">
						<ul>
							<li><a href="http://" target="_blank" rel="noopener noreferrer">Rhino Login</a></li>
							<li><a href="http://" target="_blank" rel="noopener noreferrer">PunkBuster</a></li>
						</ul>
					</div>
					<div class="col-4 link">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus in laboriosam, tenetur similique quidem molestiae nobis est quo mollitia error minus eius minima maxime consequuntur vitae voluptate aperiam nihil laborum!
					</div>
					<div class="clear"></div>
				</div>
				<div class="copy">
					Copyright &copy; 2019 <a href="http://bearlink.id" target="_blank" rel="noopener noreferrer">BearLink.id</a>
				</div>
			</section>
			

		</section>

		<script type="text/javascript">
			$('#bt-register').click(function(e) {
				e.preventDefault();
				$('#login').fadeOut('  fast');
				$('#register').fadeIn('fast');
			});
		</script>
	</body>
</html>
