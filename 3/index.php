<?php


// function Sum(...$a)
// {
//     $sum = 0;
//     foreach ($a as $value) {
//         $sum += $value;
//     }
//     return $sum;
// }
// $res = Sum(4, 4, 5, 5, 5, 5, 5, 5, 5);
// echo "sum = " . $res;


//Example

// $str_en = "To be or not to be";
// $str_ua = "Бути чи не бути";
// echo  strlen($str_ua);
// echo  "<br>";
// echo  mb_strlen($str_ua);

//Example 

// $str_pos = "New string != test string";
// echo strpos($str_pos, "!=");

//Example 
$file = fopen("example.txt", "a+b") or die("Can`t open file");
