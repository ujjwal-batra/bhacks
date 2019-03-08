<?php
    session_start();
    include 'includes/dbhlogin.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="uname" placeholder="Name">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="text" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">sign up</button>
</form>
<br>
<br>
<form action="includes/login.inc.php" method="POST">
    <input type="text" name="loginid" placeholder="login id">
    <br>
    <input type="text" name="loginpwd" placeholder="login pwd">
    <button type="submit" name="submit">login</button>
</form>
<?php

    // $sql ="SELECT * FROM users WHERE users_uid=?;";
    // $stmt = mysqli_stmt_init($conn);
    // if(!mysqli_stmt_prepare( $stmt, $sql)){
    //         echo "SQL statement failed";
    // }

    //     while($row=mysqli_fetch_assoc($results))
    //     {
    //         echo $row['users_id']."<br>";
    //         echo $row['users_first']."<br>";
    //         echo $row['users_last']."<br>";
    //         echo $row['users_email']."<br>";
    //         echo $row['users_uid']."<br>";
    //         echo $row['users_pwd']."<br>";
    //     }
?>

</body>
</html>

