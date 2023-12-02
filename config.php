<?php 
$servername="localhost";
$username="root";
$password="";
$database="utsdb";

$conn=new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die ("Koneksi Error". $conn->connect_error); 
}else{
    echo "Koneksi Terhubung";
}