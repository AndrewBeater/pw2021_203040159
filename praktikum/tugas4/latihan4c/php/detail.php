<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
Jum'at 13.00-14.00
*/
?>

<?php 
//mengecek apakah  ada id yang di kirimkan
//jika tidak maka akan di kembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'function.php';

//Mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan parameter id yang di ambil dari url 
$animes = query("SELECT * FROM anime WHERE id= $id")[0];
?>