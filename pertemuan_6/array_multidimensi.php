<?php
$products = [
    ['nama' => 'X441MA', 'merk' => 'Asus', 'harga' => 4349000],
    ['nama' => 'Z441BA', 'merk' => 'Asus', 'harga' => 3999000],
    ['nama' => 'IdeaPad 130', 'merk' => 'Lenovo', 'harga' => 3799000],
    ['nama' => 'IdeaPad 330', 'merk' => 'Lenovo', 'harga' => 3999000],
    ['nama' => 'CM0091AU', 'merk' => 'HP', 'harga' => 3260000]
];
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Merk</th>
        <th>Harga</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $product['nama']; ?></td>
            <td><?= $product['merk']; ?></td>
            <td><?= $product['harga']; ?></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <td colspan="5"></td>
    </tr>
</table>