<?php
$arr = [1, 6, 3, 8, 66, 4, 99, 6, 34, 78];
$sum = 0;
foreach ($arr as $value) {
    $sum += $value;
}
echo "Sum=" . $sum . "<br>";
echo "Arithmetic mean=" . $sum / count($arr);
