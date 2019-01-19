<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>rhino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <section>
        <h1>Selamat Datang di Rhino Login System</h1>
    </section>
    <section>
        <h1>Log to in</h1>
        <form action="checkRhino.php" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" name="login">
        </form>
    </section>
    <section>
        <h1>Reg to Join</h1>
        <form action="addMember.php" method="post">
            <input type="text" name="fullname">
            <input type="text" name="username">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="submit" name="daftar">
        </form>
    </section>
</body>
</html>