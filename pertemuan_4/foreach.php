<?php
$data = [
    'Kalimantan Selatan',
    'Kalimantan Tengah',
    'Kalimantan Utara',
    'Kalimantan Timur',
    'Kalimantan Barat',
    'Sulawesi Tengah',
    'Sulawesi Barat'
];
echo '<table border=1 cellspacing=0>
    <tr>
        <th>No</th>
        <th>Provinsi</th>
    </tr>
';
$no=1;
foreach ($data as $prov) {
    echo '<tr>
        <td>'.$no.'</td>
        <td>'.$prov.'</td>
    </tr>';
    $no++;
}
echo '<tr>
    <td colspan=2 align=center>'.count($data).'</td>
</tr>
</table>';