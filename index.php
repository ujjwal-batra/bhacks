<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
    <header class="header">
        <img src="images/logo.jpg" alt="" class="logo">
        <h1 class="website_name">Night Owl</h1>
        <a href="login_signup.php" class="login">Login/Signup</a>
        <div class="menu-open">
            <span style="font-size:30px;cursor:pointer"  onclick="openNav()">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </span>
        </div>  
    </header>
    <div class="tagline"></div>
    <div id="menu" class="about">
        <div class = "content">
            <div class ="close" onclick="closeNav()">&#10008</div>
            <a>HOME</a><br><hr>
            <a href="quesdisplay/q_display.php">ASK/VIEW QUESTIONS</a><br><hr>
            <a href="upload/blog_upload.php">UPLOAD BLOGS</a><br><hr>
            <a href="upload/blog_display.php">OUR BLOGS</a><br><hr>
            <a>ABOUT</a><br><hr>
            <a>CONTACT US</a><br><hr>
        </div>
    </div>

    <div>

    </div>
</div>


    <script src="style.js">

    </script>
</body>
    
</html>