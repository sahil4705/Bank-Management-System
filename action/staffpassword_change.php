<?php
include 'db_connect.php';
include 'staffaction.php';
@$username = $_POST['username'];
@$opassword = $_POST['opassword'];
@$npassword = $_POST['npassword'];

if (isset($_POST['change'])) {
    $res = mysqli_query($con, "SELECT * FROM staff_login WHERE username = '$username' AND password = '$opassword' ");
    if (!mysqli_num_rows($res) > 0) {
        echo '<script>
        alert(" Invalid Username Or Old Password  ");
        </script>';
    } else {
        @$npassword = $_POST['npassword'];
        $sql = "UPDATE staff_login SET password = '$npassword'  WHERE username = '$username' ";
        if (mysqli_query($con, $sql)) {
            echo '<script>
            alert(" Password Change Successfully... ");
            </script>';
        }
    }
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
<div class="dashboardlink">
        <a href="staffaction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1 align="center"> Password Change </h1>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Your User Name </label>
            <input type="text" name="username" required align="center">
        </div>
        <div class="input">
            <label>Enter Old Password </label>
            <input type="text" name="opassword" required align="center">
        </div>
        <div class="input">
            <label>Enter New Password </label>
            <input type="text" name="npassword" required align="center"><br>
        </div>
        <div class="input">
            <button type="submit" name="change" align="center" class="btn">Change</button>
        </div>
    </form>
</body>
</html>