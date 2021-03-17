<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
Jum'at 13.00-14.00
*/
?>

<?php 
$books = [
    [
        "Judul" => "Kimetsu no Yaiba",
        "Penulis" => "Koyoharu Gotouge",
        "Terbit" => "Apr 6, 2019",
        "Produser" => "ufotable",
        "Score" => "8.61",
        "img" => "1.jpg"
    ],
    [
        "Judul" => "Fate/Zero",
        "Penulis" => "Kadokawa Shoten",
        "Terbit" => "Oct 2, 2020",
        "Produser" => "ufotable",
        "Score" => "8.34",
        "img" => "2.jpg"
    ],
    [
        "Judul" => "One Punch Man",
        "Penulis" => "ONE",
        "Terbit" => "Oct 5, 2015",
        "Produser" => "Madhouse",
        "Score" => "8.56",
        "img" => "3.jpg"
    ],
    [
        "Judul" => "Mob Psycho 100",
        "Penulis" => "ONE",
        "Terbit" => "Jul 11, 2016",
        "Produser" => "Bones",
        "Score" => "8.48",
        "img" => "4.jpg"
    ],
    [
        "Judul" => "Naruto Shippuden",
        "Penulis" => "Masashi Kishimoto",
        "Terbit" => "Feb 15, 2007",
        "Produser" => "Studio Pierrot",
        "Score" => "8.17",
        "img" => "5.jpg"
    ],
    [
        "Judul" => "One Piece",
        "Penulis" => "Eiichiro Oda",
        "Terbit" => "Oct 20, 1999",
        "Produser" => "Toei Animation",
        "Score" => "8.52",
        "img" => "6.jpg"
    ],
    [
        "Judul" => "Bleach",
        "Penulis" => "Tite Kubo",
        "Terbit" => "Oct 5, 2004",
        "Produser" => "Studio Pierrot",
        "Score" => "7.80",
        "img" => "7.jpg"
    ],
    [
        "Judul" => "Charlotte",
        "Penulis" => "Jun Maeda",
        "Terbit" => "Jul 5, 2015",
        "Produser" => "P.A. Works",
        "Score" => "7.76",
        "img" => "8.jpg"
    ],
    [
        "Judul" => "Kuroko no Basket",
        "Penulis" => "Tadatoshi Fujimaki",
        "Terbit" => "Apr 8, 2012",
        "Produser" => "Production I.G",
        "Score" => "8.14",
        "img" => "9.jpg"
    ],
    [
        "Judul" => "Dr. Stone",
        "Penulis" => "Riichiro Inagaki",
        "Terbit" => "Jul 5, 2019",
        "Produser" => "TMS Entertainment",
        "Score" => "8.33",
        "img" => "10.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Film</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Terbit</th>
      <th scope="col">Studio</th>
      <th scope="col">Score</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="img/<?= $book["img"]; ?>"></td>
      <td><?= $book["Judul"] ?></td>
      <td><?= $book["Penulis"] ?></td>
      <td><?= $book["Terbit"] ?></td>
      <td><?= $book["Produser"] ?></td>
      <td><?= $book["Score"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>