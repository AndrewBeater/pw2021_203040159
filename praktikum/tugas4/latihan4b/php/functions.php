<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
Jum'at 13.00-14.00
*/
?>

<?php 
//fungsi untuk melakukan  koneks ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040159");

    return $conn;
}

//function untuk melakukan query dan memasukannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>