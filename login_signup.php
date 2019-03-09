<?php
    session_start();
    include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/Signup</title>
    <link rel="stylesheet" href="logincss/style.css">
</head>
<body>
<div class="container">
<div class="signup">
<h1>Create Account</h1>
<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="uname" placeholder="Name">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">SIGN UP</button>
</form>
</div>
<div class="login">
<h1>Log In</h1>
<form action="includes/login.inc.php" method="POST">
    <input type="text" name="loginid" placeholder="Username">
    <br>
    <input type="password" name="loginpwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">LOG IN</button>
</form>
</div>
</div>
</form>
</body>
</html>

