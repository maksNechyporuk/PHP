<?php
$arr = [1, 6, 3, 8, 66, 4, 99, 6, 34, 78];
$sum = 0;
$i = 0;
while ($i < count($arr)) {
    $sum += $arr[$i];
    $i++;
}
echo "Sum=" . $sum . "<br>";
echo "Arithmetic mean=" . $sum / count($arr);
