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
Array Associative
Keynya adalah string yang dibuat sendiri
---------------------------
contoh sederhana
$mahasiswa = [
    "nama" => "Andrew", 
    "nrp" => "203040159",
    "email" => "Andrew@gmail.com",
    "jurusan" => "Teknik Informatika"
];
echo $mahasiswa["jurusan"];
---------------------------
contoh multidimensi
$mahasiswa = [
    [
        "nama" => "Andrew", 
        "nrp" => "203040159", 
        "jurusan" => "Teknik Informatika", 
        "email" => "Andrew@gmail.com"
    ],
    [
        "nama" => "Bani", 
        "nrp" => "203010453", 
        "jurusan" => "Teknik Industri", 
        "email" => "Bani@gmail.com"
    ],
    [
        "nama" => "Ilyas", 
        "nrp" => "203030111", 
        "jurusan" => "Teknik Mesin", 
        "email" => "Yas@gmail.com"
    ]
];
            indexnya    indexnya string
                \       |
echo $mahasiswa[1]["nama"];
---------------------------
*/

$mobil = [
    [
        "merek" => "Bugatti", 
        "nama" => "Veyron", 
        "rilis" => "2015", 
        "harga" => "Rp. 14M",
        "gambar" => "1.jpg"
    ],
    [
        "merek" => "Lamborghini", 
        "nama" => "Aventador", 
        "rilis" => "2017", 
        "harga" => "Rp. 20M",
        "gambar" => "2.jpg"
    ],
    [
        "merek" => "Lamborghini", 
        "nama" => "Galardo", 
        "rilis" => "2014", 
        "harga" => "Rp. 17M",
        "gambar" => "3.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
</head>
<body>

<h1>Daftar Mobil</h1>

<?php foreach( $mobil as $m ) : ?>
    <ul>
        <li>
            <img src="img/<?= $m["gambar"]; ?>">
        </li>
        <li>Merek : <?= $m["merek"] ?></li>
        <li>Nama : <?= $m["nama"] ?></li>
        <li>Rilis : <?= $m["rilis"] ?></li>
        <li>Harga : <?= $m["harga"] ?></li>
    </ul>
<?php endforeach ?>
    
</body>
</html>