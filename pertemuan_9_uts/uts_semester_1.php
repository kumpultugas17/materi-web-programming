<?php
require 'function.php';
if (isset($_POST['hitung_gaji'])) {
    $nama = $_POST['nama_karyawan'];
    $golongan = $_POST['golongan'];
    $tahun_kerja = $_POST['tahun'];

    if ($golongan == 'A') {
        $gp = 3500000;
    } elseif ($golongan == 'B') {
        $gp = 2750000;
    } elseif ($golongan == 'C') {
        $gp = 2200000;
    } else {
        $gp = 1500000;
    }

    $masa_kerja = 2021 - $tahun_kerja;

    if ($masa_kerja >= 5) {
        $bonus = 2000000;
    } else {
        $bonus = 750000;
    }

    $gb = $gp + $bonus;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <b><u>Isilah data dibawah</u></b><br>
                Nama : M. Iqbal Adenan <br>
                NIM : ... <br>
                Jurusan : MIK <br>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <h5><u>Bagian Input</u></h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama Karyawan</label>
                                <input type="text" class="form-control" name="nama_karyawan">
                            </div>
                            <div class="form-group">
                                <label>Golongan Jabatan</label>
                                <input type="text" class="form-control" name="golongan">
                            </div>
                            <div class="form-group">
                                <label>Tahun Masuk Kerja</label>
                                <input type="number" class="form-control" name="tahun">
                            </div>
                            <button type="submit" class="btn btn-primary" name="hitung_gaji">Hitung Gaji</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <h5><u>Bagian Output</u></h5>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Nama Karyawan</td>
                                <td>:</td>
                                <td><?= $nama; ?></td>
                            </tr>
                            <tr>
                                <td>Golongan</td>
                                <td>:</td>
                                <td><?= $golongan; ?></td>
                            </tr>
                            <tr>
                                <td>Masa Kerja</td>
                                <td>:</td>
                                <td><?= $masa_kerja; ?></td>
                            </tr>
                            <tr>
                                <td>Gaji Pokok</td>
                                <td>:</td>
                                <td><?= rupiah($gp); ?></td>
                            </tr>
                            <tr>
                                <td>Bonus</td>
                                <td>:</td>
                                <td><?= rupiah($bonus); ?></td>
                            </tr>
                            <tr>
                                <td>Gaji Bersih</td>
                                <td>:</td>
                                <td><?= rupiah($gb); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>