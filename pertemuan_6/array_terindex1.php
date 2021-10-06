<?php
$pc1 = 'Motherboard';
$pc2 = 'Hardisk';
$pc3 = 'RAM';

echo '<ul>
    <li>' . $pc1 . '</li>
    <li>' . $pc2 . '</li>
    <li>' . $pc3 . '</li>
</ul>';

$pc = ['Motherboard', 'Hardisk', 'RAM', 'Processor', 'Power Supplay'];

echo '<ul>
    <li>' . $pc[2] . '</li>
    <li>' . $pc[1] . '</li>
    <li>' . $pc[0] . '</li>
    <li>' . $pc[3] . '</li>
</ul>';

echo '<ul>';
for ($i = 0; $i < count($pc); $i++) {
    echo '<li>' . $pc[$i] . '</li>';
}
echo '</ul>';

echo '<ul>';
foreach ($pc as $item) :
    echo '<li>' . $item . '</li>';
endforeach;
echo '</ul>';
