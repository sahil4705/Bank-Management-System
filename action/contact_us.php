<?php
include 'db_connect.php';
include 'staffaction.php';

@$name = $_POST['name'];
@$email = $_POST['email'];
@$message = $_POST['message'];
    $q = mysqli_query($con, "INSERT INTO contact_us (name  , email , message ) VALUES('$name' , '$email' , '$message')");
    if ($q) {   
        echo  '<script>alert("Message Send Successfully")
        location="index.php"
        </script>';
    }
    else{
        echo "Error";
    }
    ?>