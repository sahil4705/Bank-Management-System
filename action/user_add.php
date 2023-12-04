<?php

include "db_connect.php";
include 'staffaction.php';

@$uname = $_POST["username"];
@$email = $_POST["semail"];
if (isset($_POST["username"])) {
    @$password = $_POST["password"];
    @$cpassword = $_POST["cpassword"];
    if ($password != $cpassword) {
        echo "PasswordNotSame";
    } else {
        $con = mysqli_connect("localhost", "root", "", "bank_project");
        $res = mysqli_query($con, "SELECT * FROM user_login WHERE username = '$uname'");
        $ress = mysqli_query($con, "SELECT * FROM user_login WHERE email = '$email'");
        if (mysqli_num_rows($res) > 0) {
            echo "UsernameNotavAvailable";
        } elseif (mysqli_num_rows($ress) > 0) {
            echo "EmailNotavAvailable";
        } else {
            $sql = "INSERT INTO user_login(username , email , password , cpassword  ) VALUES('$uname' , '$email' , '$password' , '$cpassword' )";
            if (mysqli_query($con, $sql)) {
                echo "Sucess";
            }
        }
    }
}
mysqli_close($con);
