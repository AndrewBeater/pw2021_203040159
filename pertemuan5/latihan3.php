<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 5 - 05 Maret 2021
Mempelajari mengenai array
*/
?>

<?php 

/* 
---------------------------
Array numeric
array yang indexnya angka
---------------------------
Array Assosiatif
array yang indexnya string
---------------------------
*/

$mahasiswa = [
    ["Andrew", "203040159", "Teknik Informatika", "mandrewrrizanta@gmail.com"],
    ["Fahmy", "203010999", "Teknik Industri", "fahmy@gmail.com"],
    ["Bani", "203030754", "Teknik Mesin", "ban@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>NRP : <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>Email : <?= $mhs[3] ?></li>
    </ul>
<?php endforeach ?>
    
</body>
</html>