<?php

$message = "";
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $fileName = $email . ".txt";
    if (file_exists($fileName)) {
        $handle = fopen($fileName, "r");
        $contents = fread($handle, filesize($fileName));
        fclose($handle);

        if (hash_equals($contents,  crypt($password, "My password")))
            $message = "Sign in is successful";
    } else {
        $message = "Error";
    }
}
require_once "views/header.html";
require_once "views/footer.html";
require_once "views/login.html";
