<?php 
session_start();
include 'koneksi/koneksi.php';
if(isset($_SESSION['kd_cs'])){
    $kode_cs = $_SESSION['kd_cs'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DreamDwell</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css_header.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-zNRkkQ8K3ZSz93w9jAkl13XCEYXG6pK5I2gOxxje3W4TSsxAGnIjXYHgoPnXvZqTyiPw9rqH3jLKRpxXHzM3rA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid">
    <div class="row top">
        <center>
            <div class="col-md-4" style="padding: 3px;">
                <span><i class="glyphicon glyphicon-earphone"></i> +6287804616097</span>
            </div>
            <div class="col-md-4" style="padding: 3px;">
                <span><i class="glyphicon glyphicon-envelope"></i> dreamdwell@gmail.com</span>
            </div>
            <div class="col-md-4" style="padding: 3px;">
                <span>DreamDwell Indonesia</span>
            </div>
        </center>
    </div>
</div>

<nav class="navbar navbar-default" style="padding: 5px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color: #ff8680">
                <img src="img/logo.png" alt="DreamDwell Logo" class="navbar-logo">
                <b>DreamDwell</b>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ROOM <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="family-room.php">Family Room</a></li>
                <li><a href="deluxe-room.php">Deluxe Room</a></li>
            </ul>
        </li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="manual.php">CONTACT</a></li>


                <?php 
                if(isset($_SESSION['kd_cs'])){
                    $kode_cs = $_SESSION['kd_cs'];
                    $cek = mysqli_query($conn, "SELECT id_room from keranjang where kode_customer = '$kode_cs' ");
                    $value = mysqli_num_rows($cek);
                    ?>
                    <li><a href="wishlist.php"><i class="glyphicon glyphicon-shopping-cart"></i> <b>[ <?= $value ?> ]</b></a></li>
                    <?php 
                } else {
                    echo "<li><a href='wishlist.php'><i class='glyphicon glyphicon-shopping-cart'></i> [0]</a></li>";
                }
                if(!isset($_SESSION['user'])){
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> ACCOUNT <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="user_login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                    <?php 
                } else {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="proses/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                    <?php 
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<!-- <div class="background-container">
    <div class="background-content">
        <h2>Selamat Datang di DreamDwell Indonesia!</h2>
        <p>Nikmati suasana yang nyaman dan penuh kenangan di hotel kami. Dapatkan pengalaman menginap yang tak terlupakan dengan layanan terbaik dari kami.</p>
        <a href="booking.php" class="btn btn-primary">Book Now</a>
    </div>
</div> -->

<script>
// Menggunakan JavaScript untuk menambahkan kelas saat dihover
const navLinks = document.querySelectorAll('.navbar-nav li');

navLinks.forEach(link => {
    link.addEventListener('mouseover', () => {
        link.classList.add('hovered');
    });

    link.addEventListener('mouseout', () => {
        link.classList.remove('hovered');
    });
});
</script>

</body>
</html>
