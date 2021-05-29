<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $item = query("SELECT * FROM manga_anime WHERE id = $id")[0];
?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Detail</title>
</head>

<body style="background-image:linear-gradient(to right, #332e31, #3875c9, #274ee8);">
    <center>
        <br>
        <div class="card" style="width: 18rem;">
            <h1>Anime</h1>
            <div class="container">
                <div class="gambar">
                    <img src="../assets/img/<?= $item["gambar"]; ?>" class="card-img-top" alt="">
                </div>
                <div class="keterangan">
                    <p>Judul : <?= $item["judul"]; ?></p>
                    <p>Author : <?= $item["author"]; ?></p>
                    <p>Studio : <?= $item["studio"]; ?></p>
                    <p>Tahun Rilis : <?= $item["tahun_rilis"]; ?></p>
                    <p>Harga : <?= $item["harga"]; ?></p>
                </div>
            </div>

            <button class="btn btn-danger" type="sumbit"><a href="../index.php" style="text-decoration: none; color: white;">Kembali</a></button>
        </div>
    </center>
</body>

</html>