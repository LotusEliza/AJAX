<?php
include '../db.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function(){
            var commentCount = 2;
            $("button").click(function(){
                commentCount = commentCount + 2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount
                });
            });
        });
    </script>
</head>
<body>


<div id="comments">

    <?php
    $sql = "SELECT * FROM comments LIMIT 2";
//    var_dump($conn);
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
    ?>
</div>


<button id="btn">Show More Comments</button>

</body>

</html>