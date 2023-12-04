<?php  include 'useraction.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Balance</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
    <div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1> Check Balance</h1>
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <button type="submit" name="info" class="btn">Check</button>
        </div>
    </form>
    <?php
    include 'db_connect.php';
    @$account_no = $_POST['account_no'];
    if (isset($_POST['info'])) {
        $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' ");
        if (mysqli_num_rows($res) > 0) {
            while ($arr = mysqli_fetch_assoc($res)) {
                echo '<div class="view">
                <div class="details">
                <h2 class="heading">Account Details</h2>
                <label>ACCOUNT NUMBER : ' . $arr['account_no'] . '</label>
                <label>NAME : ' . $arr['name'] . '</label>
                <label>AVAILABLE BALANCE : ' . $arr['balance'] . '</label>
                </div>
                </div>
                ';
            }   
        } else {
            echo '<script>    
            alert(" Please Enter Valid Account Number ")
            </script>';
        }
    }
    mysqli_close($con);
    ?>
</body>
</html>