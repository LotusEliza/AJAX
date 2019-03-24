


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!--    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault(); //prevent sending form with POST
                var name = $("#mail-name").val();//taking data that had been entered to the form by user
                var email = $("#mail-email").val();
                var gender = $("#mail-gender").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                // console.log(name);
                // console.log(email);
                //document and data that we want to load to this doc
                $(".form-message").load("mail.php", {
                    name: name, //name should be equal to var name
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                });
            });
        });
    </script>

</head>

<body>

<form action="mail.php" method="POST">
    <input id="mail-name" type="text" name="name" placeholder="Full name">
    <br>
    <input id="mail-email" type="text" name="email" placeholder="E-mail">
    <br>
    <select id="mail-gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>
    <textarea id="mail-message" name="message" placeholder="Message"></textarea>
    <br>
    <button id="mail-submit" type="submit" name="submit">Send</button>
    <p class="form-message"></p>
</form>

</body>

</html>

