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
    <title>Document</title>
</head>
<body>
<form action="quessubmit.php" method="POST">
<input type="text" name="ques" placeholder="Type in your query here...">
<br>
<input type="number" name="bid" placeholder="bid">
<br>
<button type="submit" name="submit">ask</button>
</form>

    
</body>
</html>