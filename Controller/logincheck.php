<?php

session_start();
require_once "function.php";
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if(!empty($username) && !empty($password)){
    $file = __DIR__ . '/../File/user.txt';
    $data=readFi($file);
foreach ($data as $dataval) {
    if ($dataval['username'] == $username && $dataval['password'] == $password) {
        setcookie('autho', true, time() + 20, '/');
        header('Location: ../index.php');
        break;
    }
    else{
        header('Location: ../View/login.php');
  
    }
}

}
else{
    header('Location: ../View/login.php');
}




?>