<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function (){
            $("button").click(function () {
                $.get("text.txt", function (data, status) {
                    $("#test").html(data);
                    alert(status);
                })
            })
        })
    </script>
</head>
<body>

<button id="btn">Click me to get data!</button>
<p id = "test"></p>

</body>

</html>