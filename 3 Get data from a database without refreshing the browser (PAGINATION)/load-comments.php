<?php

include '../db.php';

$commentNewCount = $_POST['commentNewCount'];

//MySQL provides a LIMIT clause that is used to specify the number of records to return.

$sql = "SELECT * FROM comments LIMIT $commentNewCount";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "<p>";
        echo $row['author'];
        echo "<br>";
        echo $row['message'];
        echo "</p>";
    }
}else{
    "There are no comments";
}