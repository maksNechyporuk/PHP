<?php

$number = 4;

switch ($number) {
    case 1:
    case 2:
    case 3:
        echo "Predator";
        break;
    case 4:
    case 5:
    case 6:
        echo "Herbivorous";
        break;
    default;
        echo 'Error';
}
