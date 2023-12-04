<?php
include 'db_connect.php';
include 'staffaction.php';

if (isset($_POST["add"])) {
@$username = $_POST['username'];
@$email = $_POST['email'];
@$password = $_POST['password'];
$con = mysqli_connect("localhost", "root", "", "bank_project");

$res =mysqli_query($con, "INSERT INTO user_login (username ,email, password ) VALUES('$username' ,'$email', '$password' )");
        if ($res) {
            echo '<script>       
            alert("User Added Successfully..")  
                </script>';
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
    <title>Add New User </title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
<div class="dashboardlink">
        <a href="staffaction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1 align="center"> Add New User </h1>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Username </label>
            <input type="text" name="username" required>
        </div>
        <div class="input">
            <label>Enter Email </label>
            <input type="text" name="email" required>
        </div>
        <div class="input">
            <label>Enter Password </label>
            <input type="text" name="password" required>
        </div>
        <div class="input">
            <button type="submit" name="add" class="btn">Add</button>
        </div>
    </form>
</body>

</html>