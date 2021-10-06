<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="usr"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
    <?php if (isset($_POST['login'])) : ?>
        <?php if ($_POST['usr'] === 'admin' && $_POST['pwd'] === 'rahasia') : ?>
            <?php header('Location:index.php'); ?>
        <?php else : ?>
            <h3 style="color: red; font-weight: bold;">Username & Password tidak seusia!!!</h3>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>