<?php
include 'db_connect.php';
include 'staffaction.php';

if (isset($_POST["signup"])) {
@$uname = $_POST['username'];
@$uemail = $_POST['email'];
@$password = $_POST['password'];
$con = mysqli_connect("localhost", "root", "", "bank_project");
$res = mysqli_query($con,"SELECT * FROM staff_login WHERE username = '$uname'");
$ress = mysqli_query($con,"SELECT * FROM staff_login WHERE email = '$uemail'");
$sql2 = "INSERT INTO staff_login (username ,email , password ) VALUES('$uname' , '$uemail' , '$password'  )";
        if (!mysqli_num_rows($res) > 0) {
            if (!mysqli_num_rows($ress) > 0) {
            if ($mysqli_query($con, $sql2)) {
                echo '<script>       
                alert("New Staff Member Add Successfully")
                </script>';
            }
        }else{
            echo '<script>       
            alert("This Email Is Already Taken")
            </script>';
        }
        }else{
            echo '<script>       
            alert("This Username Alredy Taken.")
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
    <title> Add New Staff Member</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>

<div class="dashboardlink">
        <a href="staffaction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1 align="center"> Add New Staff Member </h1>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Staff Username </label>
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
            <button type="submit" name="signup" class="btn">Add</button>
        </div>
    </form>
   
</body>
</html>