<?php
include 'db_connect.php';
session_start();
@$username = $_POST['user'];
@$password = $_POST['pwd'];
if(isset($_SESSION['user'])){
    header("Location:useraction.php");
}
else{
    if (isset($_POST['user'])) {
        $res = mysqli_query($con, "SELECT * FROM user_login WHERE username = '$username' AND password='$password'");
        if (mysqli_num_rows($res) > 0) {
            $_SESSION['user'] = $username;
            echo "success";
        } else {
            echo "no";
        }
    }
}
mysqli_close($con);
?>