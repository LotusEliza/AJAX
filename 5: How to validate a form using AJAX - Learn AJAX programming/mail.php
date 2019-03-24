<?php

/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/15/19
 * Time: 10:24 AM
 */

if(isset($_POST['submit'])){
    $name = $_POST['name']; //getting vars from jQuery code not from actual form
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];


    $errorEmpty = false;
    $errorEmail = false;

    if(empty($name) || empty($email) || empty($message)){
        echo "<span class='form-error'>Fill in all fields!</span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<span class='form-error'>Write a valid email address!</span>";
        $errorEmail = true;
    }else{
        echo "<span class='form-success'>Well done buddy!</span>";
    }
}else{
    echo "There was an error!";
}
?>
<style>
    .form-error{
        color:red;
    }

    .input-error{
        box-shadow: 0 0 5px red;
    }
</style>

<script>
    $("#mail-name, #mail-email, #mail-message, #mail-gender").removeClass("input-error");//remove input errors class we added(red)

    var errorEmpty = "<?php echo $errorEmpty; ?>"; //JS var errorEmpty will be equal to php $errorEmpty
    var errorEmail = "<?php echo  $errorEmail; ?>";

    if(errorEmpty == true){
        $("#mail-name, #mail-email, #mail-message").addClass("input-error");
    }
    if (errorEmail == true){
        $("#mail-email").addClass("input-error");
    }
    if(errorEmpty == false && errorEmail == false){
        $("#mail-name, #mail-email, #mail-message").val(""); //deleting data from form after form already submitte
    }
</script>


