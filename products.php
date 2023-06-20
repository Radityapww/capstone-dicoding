<?php
    session_start();
    require 'check_if_added.php';
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
    background-color: darksalmon;
}

h1 {
    color: #2c2c2c;
    /* background-color: #d5d5d5; */
    letter-spacing: .05em;
    text-shadow:
        4px 4px 0px #d5d5d5,
        7px 7px 0px rgba(0, 0, 0, 0.2);
}
</style>

<body>
    <div>
        <?php
                require 'header.php';
            ?>
        <div class="container">
            <div class="jumbotron">
                <img src="img/logo.png" alt="" style="width: 70px; height: auto; vertical-align: middle;">
                <h1 style="display: inline-block; vertical-align: middle;">&nbsp Welcome to Emha Store!</h1>
                <p></p>
                <p style="text-align: justify; font-family: 'Raleway', sans-serif;">
                    emha Store adalah sebuah toko yang telah berdiri sejak 2018, menjadi rujukan
                    utama bagi pelanggan yang mencari kertas continuous form berkualitas tinggi.
                    Dengan fokus yang jelas pada penjualan kertas tersebut, Emha Store menjaga
                    stok yang selalu memadai, memastikan pelanggan dapat dengan mudah
                    memenuhi kebutuhan bisnis pelanggan. Reputasi yang solid dan pelayanan
                    pelanggan yang unggul membuat Emha Store menjadi pilihan terpercaya bagi
                    pelanggan yang mengutamakan kualitas dalam pembelian kertas continuous
                    form.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK1full.jpg" alt="Cannon">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 1 Ply 200 Lembar A4 Full</h4>
                                <p>Harga : Rp. 35.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK1prs.jpg" alt="Sony DSLR">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 1 Ply 200 Lembar A4 Dibagi 2</h4>
                                <p>Harga : Rp. 35.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli
                                        Sekarang !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK1wartel.jpg" alt="Sony DSLR">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 1 Ply 200 Lembar A4 Dibagi 4</h4>
                                <p>Harga : Rp. 35.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK2full.jpg" alt="Titan 301">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 2 Ply 100 Lembar A4 Full</h4>
                                <p>Harga : Rp. 43.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK2prs.jpg" alt="Titan 201">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 2 Ply 100 Lembar A4 Dibagi 2</h4>
                                <p>Harga : Rp. 43.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK2wartel.JPG" alt="htm milan">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 2 Ply 100 Lembar A4 Dibagi 4</h4>
                                <p>Harga : Rp. 43.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK3full.jpg" alt="Raymond shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 3 Ply 100 Lembar A4 Full</h4>
                                <p>Harga : Rp. 60.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK3prs.jpg" alt="Charles shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 3 Ply 100 Lembar A4 Dibagi 2</h4>
                                <p>Harga : Rp. 60.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <a href="cart.php">
                            <img src="img/formK3wartel.jpg" alt="HXR">
                        </a>
                        <center>
                            <div class="caption">
                                <h4>Kertas Continuous Form 3 Ply 100 Lembar A4 Dibagi 4</h4>
                                <p>Harga : Rp. 60.000,-</p>
                                <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Beli Sekarang
                                        !</a></p>
                                <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add"
                                    class="btn btn-block btr-primary">Tambah Keranjang</a>
                                <?php
                                            }
                                        }
                                        ?>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
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