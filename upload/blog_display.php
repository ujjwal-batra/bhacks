<?php
    session_start();
    include '../includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="blog_display.css">
</head>
<body>
<a href="blog_upload.php" class="ask">Ask Questions</a>
<?php

$sql="SELECT * FROM blogs;";
$result=mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck < 1){
    echo "<div class='noquestion'>No Questions Yet</div>";
} 
elseif($resultCheck > 0){
    
    while($row = mysqli_fetch_assoc($result))
    {   
        
        echo "<div class='question'><a href=''>QUESTIONS =></a> ".$row['heading']."</div>"."<br>";
        echo "<div class='maxbid'><a href=''>MAX BID =></a> ".$row['content']."<br><hr>";
    }
}

?>    

</body>
</html>