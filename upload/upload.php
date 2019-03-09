<?php

    include "../includes/dbh.inc.php";
    session_start();
    //if submit is clicked
    if(isset($_POST['submit']))
    {
        
        $head = mysqli_real_escape_string($conn, $_POST['heading']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);
        $uid = $_SESSION['u_id'];

        if(empty($head) || empty($content)){
            header("Location: index.php?form=empty");
        }
        else{
            $sql = "INSERT INTO blogs (userid, heading, content) VALUES ($uid, $head, $content);";
            mysqli_query($conn, $sql);
            header("LOCATION: index.php?upload=success");
        }

    }
    

