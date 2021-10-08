<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="proses-login.php">
        <div>
            <label>Email</label> <br>
            <input name="email" type="email" placeholder="Masukkan email">
        </div>
        <div>
            <label>Kata Sandi</label> <br>
            <input name="password" type="password" placeholder="Masukkan kata sandi">
        </div>
        <div>
            <button>Login</button>
        </div>
    </form>
</body>

</html>

<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'fulan@gmail.com') {
    die("Email tidak terdaftar!");
}

if ($password !== 'kerjadarirumah') {
    die("Password salah!");
}

# jika lolos alias email dan password nya benar
echo "Selamat {$email}, anda berhasil login! :)";

# tag php tidak perlu ditutup karena ia tidak bercampur dengan bahasa lainnya
?>