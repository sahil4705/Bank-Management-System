<?php
include 'db_connect.php';
include 'useraction.php';
@$account_no = $_POST['account_no'];
if (isset($_POST['confirm'])) {
    $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' ");
    if (!mysqli_num_rows($res) > 0) {
        echo '<script>
        alert(" Please Enter Valid Account Number...")
        </script>';
    } else {
        $res2 = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' And is_aadhar_link = 'Linked' ");
        if (!mysqli_num_rows($res2) > 0) {
            echo '<script>
            if(confirm("Aadhar Card Is Not Linked \n If You Want To Link Please Click On OK Button"))
            {
                location = "aadhar_link.php";
            }
            </script>';
        }else{
        echo '<script>
        alert(" Aadhar Card Is Linked")
        location = "useraction.php";
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
    <title>Check Aadhar Card Is Linked or Not</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
    <div class="dashboardlink">
        <a href="useraction.php"> Go To Dashboard</a>
    </div>
    <div class="header">
        <h1> Check Aadhar Linked Status</h1>
    </div>

    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <button type="submit" name="confirm" class="btn">Confirm</button>
        </div>
    </form>
</body>

</html>