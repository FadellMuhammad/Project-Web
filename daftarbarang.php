<?php

// if(isset($_SESSION['username'])){
//     echo "<script>alert('silakan login terlebih dahulu')</script>";
// }

session_start();
include_once('db_connect.php');
$database = new database();

// if (!isset($_SESSION['username'])) {
//     echo "<script>alert('silakan login terlebih dahulu')</script>";
//     // header('location:login.php');

// }

if (!isset($_SESSION['login'])) {
    header('location:popup.php');
}

if (isset($_POST['simpan'])) {
    $id = $database->dapatid($_SESSION['username']);
    $tersimpan = $_POST['idbarang'];
    if (
        $database->data($id, 0, $tersimpan)
    ) {
        header('location:daftarbarang.php');
    }
}

if (isset($_POST['beli'])) {
    $id = $database->dapatid($_SESSION['username']);
    $dibeli = $_POST['idbarang'];
    if (
        $database->data($id, $dibeli, 0)
    ) {
        header('location:daftarbarang.php');
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
    <link rel="stylesheet" href="css/dftbarang.css">
    <title>Daftar Barang</title>
</head>

<body>
    <div class="container">
        <div class="mb-3 d-flex justify-content-between">
            <a href="index.php" class="buttn tex bt">Home</a>
            <h1 align="center">DAFTAR BARANG</h1>
            <a href="profil.php" class="buttn tex bt">Profil</a>
        </div>


        <div class="card-deck radius">
            <div class="row">
                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                            <form method="post">
                                <input type="number" name="idbarang" hidden value="1">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                            <form method="post">
                                <input type="number" name="idbarang" hidden value="2">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                            <form method="post">
                                <input type="number" name="idbarang" hidden value="3">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                        <form method="post">
                                <input type="number" name="idbarang" hidden value="3">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                        <form method="post">
                                <input type="number" name="idbarang" hidden value="3">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                        <form method="post">
                                <input type="number" name="idbarang" hidden value="3">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                        <form method="post">
                                <input type="number" name="idbarang" hidden value="3">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card p-2 m-2">
                    <img src="img/ta.png" class="card-img-top radius" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-0">RAM</h5>
                        <p class="card-text">120.000</p>
                        <div class="button">
                        <form method="post">
                                <input type="number" name="idbarang" hidden value="3">
                                <button type="submit" name="simpan" class="button buttn tex ml-2">Simpan</button>
                                <button type="submit" name="beli" class="button buttn tex ml-2">Beli</button>
                            </form>
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

</html>