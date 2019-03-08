<?php
    if(isset($_POST['submit'])){

    include 'dbhlogin.inc.php';

    $uname=mysqli_real_escape_string($conn,$_POST['uname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $uid=mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

    if(empty($uname)||empty($email)||empty($uid)||empty($pwd)){
        header("Location: ../index.php?signup=empty");
        exit();
    }
    else{
        $sql="SELECT * FROM users WHERE users_uid='$uid'";
        $results=mysqli_query($conn, $sql);
        $resultsCheck=mysqli_num_rows($results);
        if($resultCheck > 0)
        {
            header("Location: ../index.php?signup=uidexist");
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../index.php?signup=invalidemail");
        }
        else{
            //hashing the password
            $hashedpwd= password_hash($pwd, PASSWORD_DEFAULT);
            $sql="INSERT INTO users (users_name, users_email, users_uid,
            users_pwd) VALUES ('$uname','$email','$uid','$hashedpwd');";
            mysqli_query($conn,$sql);
            header("Location: ../index.php?signup=sucess");
        }
    }
}
else{
    header("Location: ../index.php?signup=error");
}
?>