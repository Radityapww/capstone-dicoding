<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Emha Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<style>
body {
    --s: 100px;
    /* control the size */
    --c1: #F8B195;
    --c2: #355C7D;

    --_g:
        var(--c2) 6% 14%, var(--c1) 16% 24%, var(--c2) 26% 34%, var(--c1) 36% 44%,
        var(--c2) 46% 54%, var(--c1) 56% 64%, var(--c2) 66% 74%, var(--c1) 76% 84%, var(--c2) 86% 94%;
    background:
        radial-gradient(100% 100% at 100% 0, var(--c1) 4%, var(--_g), #0008 96%, #0000),
        radial-gradient(100% 100% at 0 100%, #0000, #0008 4%, var(--_g), var(--c1) 96%) var(--c1);
    background-size: var(--s) var(--s);
}
</style>

<body>
    <div>
        <?php
            require 'header.php';
           ?>
        <div id="bannerImage" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <img src="img/logo.png" alt="" style="width: 70px; height: auto; align-items: center;">
                        <h1>Emha Store</h1>
                        <p>Toko Kertas Continuous Form Terbaik</p>
                        <a href="products.php" class="btn btn-danger">Order Sekarang</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/formK1full.jpg" alt="K1">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Kertas Continuous 1 Ply</p>
                                <p style="text-align: center; ">Warna Putih</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/formK2prs.jpg" alt="K2">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Kertas Continuous 2 Ply</p>
                                <p style="text-align: center; ">Warna Putih dan Pink</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/formK3wartel.jpg" alt="K3">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Kertas Continuous 3 Ply</p>
                                <p style="text-align: center; ">Warna Putih, Pink, dan Kuning</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br><br><br>
        <footer class="footer">
            <div class="container">
                <center>
                    <p>Copyright &copy Emha Store. All Rights Reserved. | Contact Us: +62 888888888</p>
                </center>
            </div>
        </footer>
    </div>
</body>

</html>