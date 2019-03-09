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
</head>
<body>
<a href="q_ask.php">ask questions</a>
<?php

$sql="SELECT * FROM questions;";
$result=mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck < 1){
    echo "No Questions Yet";
} 
elseif($resultCheck > 0){
    
    while($row = mysqli_fetch_assoc($result))
    {   
        echo $row['ques_full']."<br>";
        echo $row['ques_maxbid']."<br>";
        //echo "<a href="../bid/bidding.php">bid</a>";
    }
}

?>    

</body>
</html>