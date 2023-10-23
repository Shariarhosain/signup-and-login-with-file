<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Login</h1>
    <form action=" ../Controller/logincheck.php" method="post">
        <input type="text" name="username" placeholder="Username" >
        <input type="password" name="password" placeholder="Password" >
        <input type="submit" value="submit"> <br><a href="sigup.php">Signup</a>
    </form>
</body>
</html>