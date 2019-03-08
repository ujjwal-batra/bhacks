<?php
    session_start();
    if(isset($_POST['submit']))
    {
        include 'dbhlogin.inc.php';
        $uid=mysqli_real_escape_string($conn,$_POST['loginid']);
        $pwd=mysqli_real_escape_string($conn,$_POST['loginpwd']);
        if(empty($uid) || empty($pwd)){
            header("Location: ../index.php?login=empty");
        }
        else{
            $sql= "SELECT * FROM users WHERE users_uid='$uid'";
            $result=mysqli_query($conn,$sql);
            $resultCheck=mysqli_num_rows($result);
            if($resultCheck < 1){
                header("Location: ../index.php?login=error");
                exit();
            }
            else{
                if($row=mysqli_fetch_assoc($result)){
                    $hashedpasscheck = password_verify($pwd, $row['users_pwd']);
                    if($hashedpasscheck==false)
                    {
                        header("Location: ../index.php?login=wrongpass");
                    }
                    elseif($hashedpasscheck==true)
                    {
                        $_SESSION['u_id']=$row['users_id'];
                        $_SESSION['u_name']=$row['users_name'];
                        $_SESSION['u_email']=$row['users_email'];
                        $_SESSION['u_uid']=$row['users_uid'];
                        header("Location: ../index.php?login=sucess");
                    }
                }
            }

        }
    }