<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
Jum'at 13.00-14.00
*/
?>

<?php 
//Menghubungkan dengan file php lainnya
require 'php/function.php'
//Melakukan query
$result = mysqli_query($conn, "SELECT * FROM anime");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4c</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
<thead>
    <tr>
        <th scope="col">NO</th>
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Terbit</th>
        <th scope="col">Studio</th>
        <th scope="col">Score</th>
    </tr>
</thead>
<tbody>
    <?php $i = 1 ?>
    <?php foreach($animes as $anime) : ?>
    <p>
        <a href="php/detail.php?id=<?= $anime['id'] ?>">
            <?= $anime["nama"] ?>
        </a>
    </p>
    <tr>
        <th scope="row"><?= $i ?></th>
        <td><img src="assets/img/<?= $anime["Gambar"]; ?>"></td>
        <td><?= $anime["Judul"] ?></td>
        <td><?= $anime["Penulis"] ?></td>
        <td><?= $anime["Terbit"] ?></td>
        <td><?= $anime["Studio"] ?></td>
        <td><?= $anime["Score"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
</tbody>
</table>
</div>
</body>
</html>