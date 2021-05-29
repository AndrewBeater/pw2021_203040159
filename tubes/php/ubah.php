<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];
$anime = query("SELECT * FROM manga_anime WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php';
                 </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Ubah</title>
  <style>
    .textform {
      font-weight: bold;
    }

    .inputform {
      border-radius: 10px;
      width: 400px;
    }

    h3 {
      width: 300px;
      height: 100px;
      padding: 15px;
      margin: 20px;
      background-image: linear-gradient(to right, #ba181b, #e5383b, #d90429);
      border-radius: 15px;

    }
  </style>
</head>

<body style="background-image:linear-gradient(to right, #332e31, #3875c9, #274ee8); ">
  <center>
    <h3>Form Ubah Data Manga Anime</h3>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $anime['id']; ?>">

      <div class="textform">
        <label for="gambar">Gambar :</label>
        <br>
        <input class="inputform" type="text" name="gambar" id="gambar" required value="<?= $anime['gambar']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="judul">Judul :</label>
        <br>
        <input class="inputform" type="text" name="judul" id="judul" required value="<?= $anime['judul']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="author">Author :</label>
        <br>
        <input class="inputform" type="text" name="author" id="author" required value="<?= $anime['author']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="studio">Studio :</label>
        <br>
        <input class="inputform" type="text" name="studio" id="studio" required value="<?= $anime['studio']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="tahun_rilis">Tahun Rilis :</label>
        <br>
        <input class="inputform" type="text" name="tahun_rilis" id="tahun_rilis" required value="<?= $anime['tahun_rilis']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="harga">Harga :</label>
        <br>
        <input class="inputform" type="text" name="harga" id="harga" required value="<?= $anime['harga']; ?>">
      </div>
      <br>
      <button class="btn btn-success" type="submit" name="ubah">Ubah Data!</button>
      <button class="btn btn-primary" type="sumbit"><a href="admin.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </form>
  </center>
</body>

</html>