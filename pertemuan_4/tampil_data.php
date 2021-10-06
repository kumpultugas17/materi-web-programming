<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "db_pegawai";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        $sql = mysqli_query($conn, "SELECT * FROM pegawai");

    ?>
<table border=1>
    <tr>
        <td>Nip</td>
        <td>Nama</td>
    </tr>
    
        <?php
foreach ($sql as $isi) {
    echo '<tr><td>'.$isi['nip'].'</td>';
    echo '<td>'.$isi['nama'].'</td></tr>';
}   
        ?>
</table>

</body>
</html>