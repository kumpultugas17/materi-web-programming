<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="page2.php" method="post">
            <fieldset>
                <label for="">Panjang</label>
                <input type="text" name="pjg"><br>
                <label for="">Lebar</label>
                <input type="text" name="lbr"><br>
                <button type="submit" name="hitung">Login</button>
            </fieldset>
        </form>
        <?php
        if (isset($_POST['hitung'])) {
            $pjg =  $_POST['pjg'];
            $lbr = $_POST['lbr'];

            $luas = $pjg * $lbr;

            echo 'luas adalah '.$luas.'<br>';

            for ($i=1; $i <= $luas; $i++) { 
                echo $i.'<br>';
            }
        }
    ?>
    </body>
</html>