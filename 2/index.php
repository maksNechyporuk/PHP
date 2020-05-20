<?php



//Example 1
// include "function.php";

// $res = Sum(3, 6);

// echo $res;

//$arr = [1, 2, 4, 6];
// for ($i = 0; $i < count($arr); $i++) {
//     echo $arr[$i];

//     echo "<br/>";
// }

// foreach ($_SERVER as $key => $value) {
//     echo "<div> Key=" . $key . " Value= " . $value . "</div>";
// }




//Example 2

use function PHPSTORM_META\type;

$message = "";
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password ==  $confirm_password) {

        $fileName = "db.txt";

        $file = file_get_contents($fileName, true);
        $check_email = "";
        $check_password = "";
        $isEmail = true;
        foreach ($file as $value) {
            if ($isEmail)
                $check_email += $value;
            else
                $check_password += $value;

            if ($value == ':') {
                if ($check_email == $email) {
                    $message = "This email is already used";
                    break;
                }
                $isEmail = false;
                $check_email = "";
            }
            if ($value == '/') {
                $isEmail = true;
                $check_email = "";
            }
        }
        $fileWR = fopen($fileName, "w");
        fwrite($fileWR,   $email . ":" . crypt($password, "My password") . "/");
        fclose($fileWR);
        // $message = "Successful";
    } else
        $message = "Password doesn't match";
}
require_once "views/header.html";
require_once "views/footer.html";
if ($message == "Successful")
    require_once "views/login.html";
else
    require_once "views/main.html";

// $message = "";
// if (!empty($_POST)) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $confirm_password = $_POST['confirm_password'];
//     if ($password ==  $confirm_password) {

//         $fileName = $email . ".txt";
//         if (!file_exists($fileName)) {
//             $file = fopen($fileName, "w");
//             fwrite($file, crypt($password, "My password"));
//             fclose($file);
//             $message = "Successful";
//         } else {
//             $message = "This email is already used";
//         }
//     } else
//         $message = "Password doesn't match";
// }
// require_once "views/header.html";
// require_once "views/footer.html";
// if ($message == "Successful")
//     require_once "views/login.html";
// else
//     require_once "views/main.html";
//Example 3


// if (!empty($_POST)) {
//     $My_score = 0;
//     $PC_score = 0;
//     while (true) {
//         $My_score1 = rand(1, 6);
//         $My_score2 = rand(1, 6);
//         $PC_score1 = rand(1, 6);
//         $PC_score2 = rand(1, 6);
//         if (($My_score1 +  $My_score2) >  ($PC_score1 + $PC_score2)) {
//             if ($My_score1 ==  $My_score2) {
//                 $My_score += 2;
//             } else
//                 $My_score++;
//         } elseif (($My_score1 +  $My_score2) <  ($PC_score1 + $PC_score2)) {
//             if ($PC_score1 == $PC_score2) {
//                 $PC_score += 2;
//             } else
//                 $PC_score++;
//         } elseif (($My_score1 +  $My_score2) == ($PC_score1 + $PC_score2)) {
//             $My_score++;
//             $PC_score++;
//         }
//         if ($My_score >= $_POST['score'] || $PC_score >= $_POST['score'])
//             break;
//     }
//     if ($My_score > $PC_score) {
//         echo "The player won :" . $My_score . "<br>";
//         echo "The computer lost:" . $PC_score;
//     } elseif ($My_score < $PC_score) {
//         echo "The computer won:" . $PC_score . "<br>";
//         echo "The player lost :" . $My_score;
//     } else echo "Error";
// }
// require_once "views/game.html";
