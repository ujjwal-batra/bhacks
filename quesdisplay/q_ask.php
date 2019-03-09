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
    <title>Ask-ques</title>
    <link rel="stylesheet" href="q_ask.css">
</head>
<body>

    <div class="container">
    <div class="head">Ask It Out</div>
        <form action="quessubmit.php" method="POST">
        <input class="first" type="text" name="ques" placeholder="Type in your query here...">
        <br>
        <input type="number" name="bid" placeholder="Max Bid...">
        <br>
        <button type="submit" name="submit">ASK</button>
        </form>
    </div>
    
</body>
</html>