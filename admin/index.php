<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="adminpage.css">
    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
</head>
<body>
<div class="adminpage">
    <h1 class="koneksi">
    <?php
    include '../config.php';
    session_start();
    if($_SESSION['status']!='login'){
    header("location:../index.php");}
    ?>
    </h1>
    <div class="welcome">
        <h1>Selamat Datang di <br> Halaman Admin</h1>
        <h2>
        <?php 
        echo $_SESSION['username'];
        ?>
        </h2>
        <br>
        <a href="logout.php">Logout</a>
    </div>
</div>



<!-- <?php 
// include '../config.php';
// session_start();
// if($_SESSION['status']!='login'){
//     header("location:../index.php");
// }
// echo "<br>";
// echo "Selamat Datang di Halaman Admin : ".$_SESSION['username'];
// echo "<br>";
// echo "<br>";
?> -->


</body>
</html>