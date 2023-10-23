<?php

session_start();
require_once "function.php";
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $user = ['username' => $username, 'password' => $password];


    $file = __DIR__ . '/../File/user.txt';
     $data=readFi($file);

    if (!in_array($user, $data)) {
    
        file_put_contents($file, serialize($user) . PHP_EOL, FILE_APPEND);
        header('Location: ../View/login.php');
    }
    else 
    {
        header('Location: ../View/signup.php');
    }
   

} 
else 
{
    header('Location: ../View/login.php');
}







?>