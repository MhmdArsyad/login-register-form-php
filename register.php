<?php
include 'config.php';

if(isset($_POST["register"])){
    $username=strtolower(stripslashes($_POST["username"]));
    $password=mysqli_escape_string($conn, $_POST["password"]);
}

$sql = mysqli_query($conn, "insert into login values ('', '$username', '$password')");

if ($sql === false) {
    echo "Error: " . mysqli_error($conn);
  } else {
    echo "<br> Anda telah terdaftar silahkan login";
  }
?>
<script>
  setTimeout(function () {    
    window.location.href = 'login.php'; 
},2000); //Dalam waktu 2 detik akan otomatis masuk login.php

</script>