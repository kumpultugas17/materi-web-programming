<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika Lanjutan</title>
    <style>
        .left {
            float: left;
            width: 50%;
            background-color: yellow;
        }

        .right {
            float: right;
            width: 50%;
            background-color: yellowgreen;
        }

        .container {
            width: 100%;
            background-color: whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container">

    </div>
    <div class="left">
        <h4>Input Data</h4>
        <hr>
        <form action="" method="post">
            <label>Nama Lengkap</label><br>
            <input type="text" name="nama"><br>
            <label>Nim</label><br>
            <input type="text" name="nim"><br>
            <label>Nilai Tugas</label><br>
            <input type="text" name="n_tugas"><br>
            <label>Nilai UTS</label><br>
            <input type="text" name="n_uts"><br>
            <label>Nilai UAS</label><br>
            <input type="text" name="n_uas"><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    <div class="right">
        <h4>Ouput</h4>
        <hr>
        <?php
        if (isset($_POST['submit'])) :
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $n_tugas = $_POST['n_tugas'];
            $n_uts = $_POST['n_uts'];
            $n_uas = $_POST['n_uas'];

            $n_akhir = ($n_tugas * 0.2) + ($n_uts * 0.3) + ($n_uas * 0.5);

            if ($n_akhir > 85) {
                $n_huruf = 'A';
            } elseif ($n_akhir > 75) {
                $n_huruf = 'B';
            } elseif ($n_akhir > 65) {
                $n_huruf = 'C';
            } elseif ($n_akhir > 45) {
                $n_huruf = 'D';
            } else {
                $n_huruf = 'E';
            }

            $ket = $n_akhir > 65 ? '<span style=color:green; font-weight:bold;>LULUS</span>' : '<span style=color:red; font-weight:bold;>TIDAK LULUS</span>';
        ?>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $nim; ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><?= $n_tugas; ?></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><?= $n_uts; ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><?= $n_uas; ?></td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td><?= $n_akhir; ?></td>
                </tr>
                <tr>
                    <td>Nilai Huruf</td>
                    <td>:</td>
                    <td><?= $n_huruf; ?></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?= $ket; ?></td>
                </tr>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>