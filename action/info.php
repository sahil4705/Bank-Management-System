<?php include 'useraction.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Information</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
<div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1 align="center"> Account's Information </h1>
    </div>

    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <button type="submit" name="info" class="btn">Confirm</button>
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
                <label>NAME  : ' . $arr['name'] . '</label>
                <label>ACCOUNT NUMBER : ' . $arr['account_no'] . '</label>
                <label>GENDER : ' . $arr['gender'] . '</label>
                <label>MOBILE NUMBER : ' . $arr['mobile'] . '</label>
                <label>EMAIL : ' . $arr['email'] . '</label>
                <label>BIRTHDATE : ' . $arr['birthdate'] . '</label>
                <label>PAN NUMBER : ' . $arr['pan_number'] . '</label>
                <label>HOME ADDRESS : ' . $arr['home_address'] . '</label>
                <label>OFFICE ADDRESS : ' . $arr['office_address'] . '</label>
                <label>STATE : ' . $arr['state'] . '</label>
                <label>CITY : ' . $arr['city'] . '</label>
                <label>PINCODE : ' . $arr['pincode'] . '</label>
                <label>IFSE : ' . $arr['ifsc'] . '</label>
                <label>BRANCH : ' . $arr['branch'] . '</label>
                <label>NOMINEE NAME : ' . $arr['nominee_name'] . '</label>
                <label>NOMINEE ACCOUNT NUMBER : ' . $arr['nominee_account_number'] . '</label>
                <label>NOMINEE ACCOUNT TYPE : ' . $arr['nominee_account_type'] . '</label>
                <label>ACCOUNT OPEN DATE : ' . $arr['acc_open_date'] . '</label>
                <label>ACCOUNT STATUS : ' . $arr['account_status'] . '</label>
                </div>
                </div>
                ';
            }
            mysqli_close($con);
        } else {
            echo '<script>    
            alert(" Please Enter Valid Account Number ")
            </script>';
        }
    }
    ?>
</body>

</html>