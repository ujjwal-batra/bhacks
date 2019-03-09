<?php
    session_start();
    include "../includes/dbh.inc.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload your blog</title>
    <link rel="stylesheet" href="Upload.css">
</head>
<body>
<div class="container">
    <div>SUBMIT YOUR BLOG</div>
    <form action="upload.php" method="POST">
        <input type="text" name="heading" placeholder="Subject for the Blog"><br>
        <input type="text" name="content" placeholder="Write Your Blog Here..."><br>
        <button type="submit" name="submit">Submit Blog</button>
    </form>
</div>
</body>
</html>