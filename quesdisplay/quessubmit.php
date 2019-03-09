<?php
    session_start();
    if(isset($_POST['submit']))
    {
        include '../includes/dbh.inc.php';
        $ques=mysqli_real_escape_string($conn,$_POST['ques']);  
        $bid=$_POST['bid'];
        if (!(isset($_SESSION['u_id']))) 
        {
            header ("Location: ../login_signup.php?login=notloggedin");
        }
        else{
            $uid=mysqli_real_escape_string($conn,$_SESSION['u_id']);
            $uname=mysqli_real_escape_string($conn,$_SESSION['u_name']);
            $uemail=mysqli_real_escape_string($conn,$_SESSION['u_email']);
            if(empty($ques)||empty($bid))
            {
                header("Location: q_ask.php?quessubmit=empty");
            }
            else{
                $sql="INSERT INTO questions (ques_full, ques_bid, ques_maxbid, ques_u_id) VALUES ('$ques','$bid','$bid','$uid');";
                mysqli_query($conn, $sql);
                header("Location: q_display.php?quessubmit=sucess");
            }
        }
    }
    else{
        header("Location : ../index.php?quessubmit=failed");
    }
?>