<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 12 - 22 Mei 2021
Mempelajari mengenai login & registrasi
*/
?>

<?php 
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
      echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
          </script>";
  } else {
      echo "<script>
                alert('Registrasi Gagal!');
          </script>";
  }
}
?>

<form action="" method="post">
  <table>
    <tr>
      <td><label for="username">Username</label></td>
      <td>:</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td><label for="password">Password</label></td>
      <td>:</td>
      <td><input type="password" name="password"></td>
    </tr>
  </table>
  <br>
  <button type="submit" name="register">REGISTER</button>
</form>