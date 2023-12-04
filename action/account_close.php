<?php
include 'db_connect.php';
include 'staffaction.php';
@$account_no = $_POST['account_no'];
if (isset($_POST['confirm'])) {
    $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' ");
    if (!mysqli_num_rows($res) > 0) {
        echo '<script>
        alert(" Please Enter Valid Account Number...")
        </script>';
    } else {
        $ress = mysqli_query($con, "DELETE FROM account_open WHERE account_no = '$account_no'");
        if ($ress) {
            echo '<script>
            alert("Account Deleted Successfully....")
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
    <title>Close An Account</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
<div class="dashboardlink">
        <a href="staffaction.php"> Go To Dashboard</a>
    </div>
    <div class="header">
        <h1>Close An Account</h1>
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