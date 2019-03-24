<?php
include "suggestions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Suggestions</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){

            $("input").keyup(function(){
               var name = $("input").val();
               $.post("suggestions.php", {
                   suggestion: name
               }, function (data, status) {
                   $("#test").html(data);
               });
            });
        });
    </script>
</head>
<body>

<input type="text" name="name">
<p id = "test"></p>

</body>

</html>