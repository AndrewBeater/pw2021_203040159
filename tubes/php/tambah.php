<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal ditambahkan!');
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
  <title>Tambah Anime</title>
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
    <br>
    <h3>Form Tambah Data Manga Anime</h3>
    <br>
    <form action="" method="post">
      <div class="textform">
        <label for="gambar">Gambar :</label>
        <br>
        <input class="inputform" type="text" name="gambar" id="gambar" required>
      </div>
      <br>
      <div class="textform">
        <label for="judul">Judul :</label>
        <br>
        <input class="inputform" type="text" name="judul" id="judul" required>
      </div>
      <br>
      <div class="textform">
        <label for="author">Author :</label>
        <br>
        <input class="inputform" type="text" name="author" id="author" required>
      </div>
      <br>
      <div class="textform">
        <label for="studio">Studio :</label>
        <br>
        <input class="inputform" type="text" name="studio" id="studio" required>
      </div>
      <br>
      <div class="textform">
        <label for="tahun_rilis">Tahun Rilis :</label>
        <br>
        <input class="inputform" type="text" name="tahun_rilis" id="tahun_rilis" required>
      </div>
      <br>
      <div class="textform">
        <label for="harga">Harga :</label>
        <br>
        <input class="inputform" type="text" name="harga" id="harga" required>
      </div>
      <br>
      <br>

      <button class="btn btn-success" type="submit" name="tambah">Tambah Data!</button>
      <button class="btn btn-primary" type="sumbit"><a href="admin.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </form>
  </center>
</body>

</html>