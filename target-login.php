<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'session.php' ?>
</head>
<body>
    <h1>Login</h1>
    <p>
        <?php 
            echo $id_member;
            echo $name;
            echo $username;
            echo $email;
            echo $password;
        ?>
        <a href="logout.php">Go out</a>
    </p>
</body>
</html>