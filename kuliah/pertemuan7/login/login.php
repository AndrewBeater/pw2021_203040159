<?php
/*
Muhammad Andrew Rahdi Rizanta
203040159
https://github.com/AndrewBeater/pw2021_203040159
Pertemuan 7 - 19 Maret 2021
Mempelajari mengenai GET & POST
*/
?>


<?php
// cek apakah tombol submit sudah tekan atau belum
if (isset($_POST["submit"])) {
    // cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {

        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .loginbox {
            width: 320px;
            height: 420px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        h1 {
            margin: 0;
            padding: 0;
            text-align: center;
            font-size: 22px;
        }

        .loginbox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }

        .loginbox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .loginbox input[type="text"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        .loginbox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: blue;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }

        .loginbox input[type="submit"]:hover {
            cursor: pointer;
            background: salmon;
            color: white;
        }

        .loginbox a {
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgrey;
        }

        .loginbox a:hover {
            color: #ca9a0a;
        }
    </style>
</head>

<body>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic; text-align: center ">username / password salah!</p>
    <?php endif; ?>

    <div class="loginbox">
        <h1>Login Here</h1>
        <form action="" method="post">
            <p>username</p>
            <input type="text" name="username" placeholder="Enter Username" id="username">
            <p>password</p>
            <input type="password" name="password" placeholder="Enter Password" id="password">
            <input type="submit" name="submit" value="Login">
        </form>
    </div>

</body>

</html>