<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 5 - 05 Maret 2021
Mempelajari mengenai array
*/
?>

<?php 

/* 
---------------------------
Array
Sebuah variabel yang dapat memiliki banyak nilai
array berawal indexnya dari 0 (Nol)
array pasangan antara key dan value
---------------------------
Cara lama membuat array
$hari = array("Senin", "Selasa", "Rabu");
---------------------------
Cara baru membuat array
$bulan = ["Januari", "Februari", "Maret"];
---------------------------
Elemen pada array tipe datanya boleh berbeda
$arr1 = [1, true, "tulisan"];
---------------------------
---------------------------
Menampilkan array
---------------------------
---------------------------
var_dump()
Contohnya :
array(3) {
[0]=>
string(5) "Senin"
[1]=>
string(6) "Selasa"
[2]=>
string(4) "Rabu"
}
---------------------------
print_r()
Contohnya :
Array
(
    [0] => Senin
    [1] => Selasa
    [2] => Rabu
)
---------------------------
Menampilkan hanya satu elemen array
        indexnya
            |
echo $arr1[1];
---------------------------
Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo"<br>";
var_dump($hari);
---------------------------
---------------------------
---------------------------
*/

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [1, true, "tulisan"];

// var_dump ($hari);
// echo "<br>";
// print_r ($bulan);
// echo "<br>";
// echo $arr1[1];

var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo"<br>";
var_dump($hari);


?>