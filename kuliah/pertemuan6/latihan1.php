<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 6 - 13 Maret 2021
Mempelajari mengenai array associative
*/
?>

<?php

/*
---------------------------
Memanggil Array Multidimensi
$angka = [
    [1, 2, 3], index ke-0 -> didalamnya ada index lagi mulai dari 0
    [4, 5, 6], index ke-1 -> didalamnya ada index lagi mulai dari 0
    [7, 8, 9]  index ke-2 -> didalamnya ada index lagi mulai dari 0
];
        terluar  terdalam
            \   |
echo $angka[0][2];
---------------------------
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
            text-align: center;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php 
$angka = [
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9]
];
?>

<?php foreach( $angka as $a ) : ?>
    <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>
    
</body>
</html>