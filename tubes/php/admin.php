<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$manga_anime = query("SELECT * FROM manga_anime");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $manga_anime = query("SELECT * FROM manga_anime WHERE 
                        judul LIKE '%$keyword%' OR
                        author LIKE '%$keyword%' OR
                        studio LIKE '%$keyword%' OR 
                        tahun_rilis LIKE '%$keyword%' OR
                        harga LIKE '%$keyword%' ");
} else {
  $manga_anime = query("SELECT * FROM manga_anime");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>WEABOO</title>
</head>

<body style="background-image:linear-gradient(to right, #332e31, #3875c9, #274ee8); ">
  <br>
  <br>
  <ul>
    <div class="add">
      <a class="btn btn-success" href="tambah.php">Tambah Data</a>
    </div>
    <br>
    <div class="logout">
      <a class="btn btn-danger" href="logout.php">Logout</a>
    </div>
  </ul>

  <center>
    <h3>Selamat Datang Wibu</h3>
    <br>
    <form action="" method="get">
      <input type="text" name="keyword" size="40" placeholder="Anime" autocomplete="off" autofocus>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari!!</button>
    </form>
    <br>
    <table border="1" cellpadding="13" cellspacing="0" style="color : white">
      <tr>
        <th>#</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Author</th>
        <th>Studio</th>
        <th>Tahun Rilis</th>
        <th>Harga</th>
      </tr>

      <?php if (empty($manga_anime)) : ?>
        <tr>
          <td colspan="8">
            <h1 style="text-align: center; color: red; font-style: italic;">Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>

        <?php $i = 1; ?>
        <?php foreach ($manga_anime as $musik) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $musik['id'] ?>"><button class="btn btn-success">Ubah</button></a>
              <a class="btn btn-danger" href="hapus.php?id=<?= $musik['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
            </td>
            <td><img src="../assets/img/<?= $musik['gambar']; ?>" alt=""></td>
            <td><?= $musik['judul']; ?></td>
            <td><?= $musik['author']; ?></td>
            <td><?= $musik['studio']; ?></td>
            <td><?= $musik['tahun_rilis']; ?></td>
            <td><?= $musik['harga']; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </center>
  <br>
</body>

</html>