<<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 7 - 19 Maret 2021
Mempelajari mengenai GET & POST
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang, <?= $_POST["nama"] ?>!</h1>
<?php endif; ?>

    <form action="" method="post">
    <!-- action="latihan4.php"  -->
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>