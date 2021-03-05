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
Pengulangan pada array
---------------------------
for / foreach
---------------------------
for
$angka = [3, 4, 6, 23, 56, 12, 10, 90];
<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div><?php echo $angka[$i]; ?></div>
<?php } ?>
---------------------------
foreach
$angka = [3, 4, 6, 23, 56, 12, 10, 90];
<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php endforeach ?>
---------------------------
*/

$angka = [3, 4, 6, 23, 56, 12, 10, 90];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width:50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    
    <!-- <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div><?php echo $angka[$i]; ?></div>
    <?php } ?> -->

    <div class="clear"></div>

    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach ?>

</body>
</html>