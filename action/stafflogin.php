<?php
include 'db_connect.php';
session_start();

@$username = $_POST['suser'];
@$password = $_POST['spwd'];
if(isset($_SESSION['suser'])){
    header("Location:staffaction.php");
}
else{
    if (isset($_POST['suser'])) {
        $res = mysqli_query($con, "SELECT * FROM staff_login WHERE username = '$username' AND password='$password'");
        if (mysqli_num_rows($res) > 0) {
            $_SESSION['suser'] = $username;
            echo "success";
        } else {
            echo "no";
        }
    }
}
mysqli_close($con);
?>