<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_203040159") or die("Database Salah!");
    $result = mysqli_query($conn, "SELECT * FROM manga_anime");
    return $conn;
}

function query ($sql) 
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql") or die( mysqli_error($conn));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $author = htmlspecialchars($data['author']);
    $studio = htmlspecialchars($data['studio']);
    $tahun_rilis = htmlspecialchars($data['tahun_rilis']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO manga_anime
              VALUES
              ('', '$gambar', '$judul', '$author', '$studio', '$tahun_rilis', '$harga')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM manga_anime WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $judul = htmlspecialchars($data['judul']);
    $author = htmlspecialchars($data['author']);
    $studio = htmlspecialchars($data['studio']);
    $tahun_rilis = htmlspecialchars($data['tahun_rilis']);
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE manga_anime
                    SET
                    gambar = '$gambar',
                    judul = '$judul',
                    author = '$author',
                    studio = '$studio',
                    tahun_rilis = '$tahun_rilis',
                    harga = '$harga'
					WHERE id = '$id' ";
    mysqli_query($conn, $queryubah) or die($conn);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM manga_anime
            WHERE
            gambar LIKE '%$keyword%' OR
                    judul LIKE '%$keyword%' OR
                    studio LIKE '%$keyword%' OR
                    harga LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username Already Exist!');
            </script>";
        return false;
    }

    //enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
