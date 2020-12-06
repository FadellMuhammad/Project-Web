<?php
session_start();
include_once('db_connect.php');
$database = new database();

// if (!isset($_SESSION['login'])) {
//     header('location:login.php');
// }

if (!isset($_SESSION['login'])) {
    header('location:popup.php');
}

if (isset($_POST['reset'])) {
    if ($database->reset($_SESSION['username'])) {
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
    <link rel="stylesheet" href="css/profl.css">
    <title>Profil</title>
</head>

<body>

    <div class="page-content page-container">
        <div class="padding">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row mx-0">
                            <div class="col-sm-4 bg user-profil">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" alt="" class="img-radius">
                                    </div>
                                    <div class="f-w-600"><?php echo $_SESSION['username'] ?></div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h3 class="mt-3 text-center">PROFIL</h3>
                                <div class="card-block">
                                    <h6 class="m-b-20 pb-2 b-b-default f-w-600">Information</h6>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="m-b-10 f-w-600">Nama Lengkap</p>
                                            <h6 class="text-muted f-w-400"><?php echo $_SESSION['nama'] ?></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 mt-3 pb-2 b-b-default f-w-600">Tranksaksi</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Dibeli</p>
                                            <h6 class="text-muted f-w-400"><?php
                                                                            $data = $database->tampil($_SESSION['username'], "dibeli");
                                                                            echo $data[0];

                                                                            ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Tersimpan</p>
                                            <h6 class="text-muted f-w-400"><?php
                                                                            $data = $database->tampil($_SESSION['username'], "tersimpan");
                                                                            echo $data[0];

                                                                            ?></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 mt-4 mb-3">
                                            <a href="index.php" class="button buttn tex">Home</a>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-7 mb-3">
                                            <a href="daftarbarang.php" class="button buttn tex">Daftar Barang</a>
                                        </div>
                                        <div class="col-sm-5 mb-3">
                                            <a href="logout.php" class="button buttn tex">Keluar</a>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form method="post">
                                                <button type="submit" name="reset" class="buttn tex"><span class="txt">reset</span> </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>`