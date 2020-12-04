<?php
    session_start();
    include_once('db_connect.php');
    $database = new database();

    // if(isset($_SESSION['login'])){
    //     header('location:index.php');
    // }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($database->login($username, $password)){
            header('location:index.php');
        }
    }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="bordr">
            <form method="post">
            <a href="index.php"><i class="fas fa-backward fa-2x clr"></i></a>
                <center>
                    <h1>LOGIN</h1>
                </center>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control inpt" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control inpt" id="password" name="password" required>
                    <small id="emailHelp" class="form-text text-muted">Belum punya akun?</small>
                </div>
                <a href="daftar.php" class="button buttn tex">Daftar</a>
                <button type="submit" class="button buttn tex left" name="login">Login</button>
            </form>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0016cb88ab.js" crossorigin="anonymous"></script>
</body>

</html>