<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 11 - 22 Mei 2021
Mempelajari mengenai delete, update, & searching data
*/
?>

 <?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<div class="add">
    <a href="php/tambah.php">Tambah Data</a>
</div>

<table border="1" cellpadding="13" cellspacing="0">
    <tr>
        <th>#</th>
        <th>opsi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="php/ubah.php?id=<?= $mhs['id'] ?>"><button>Ubah</button></a>
                <a href="php/hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?=$mhs['img']; ?>" alt="" width="200px"></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>