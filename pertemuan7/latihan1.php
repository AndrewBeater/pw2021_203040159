<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 7 - 19 Maret 2021
Mempelajari mengenai GET & POST
*/
?>

<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Muhammad Andrew Rahdi Rizanta", 
        "nrp" => "203040159",
        "email" => "mandrewrr@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Willyando Alfonsius", 
        "nrp" => "203040145",
        "email" => "willy@gmail.com",
        "jurusan" => "Teknik Elektro",
        "gambar" => "2.jpg"
    ]
];


// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
