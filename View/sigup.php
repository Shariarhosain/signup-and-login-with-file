<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    
    <h1>Sign up</h1>
    <form action=" ../controller/signupcheck.php" method="post">
        <input type="text" name="username" placeholder="Username" >
        <input type="password" name="password" placeholder="Password" >
        <input type="submit" value="Sign up">
        
    </form>
</body>
</html>