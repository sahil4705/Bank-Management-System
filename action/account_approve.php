<?php
include 'db_connect.php';
include 'staffaction.php';
@$account_no = $_POST['account_no'];

if (isset($_POST['confirm'])) {
        $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' AND account_status = 'Active' ");
        if (!mysqli_num_rows($res) > 0) {
            $sql = "UPDATE account_open SET account_status = 'Active', balance = '500'  WHERE account_no = '$account_no' ";
            if (mysqli_query($con, $sql)) {
                echo '<script>
                          alert("Account Approved Successfully")
                      </script>';
            }
        }
        else{
        echo '<script>
        alert("This Account Has Been Alredy Approved");
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
    <title>Approve pending Account </title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
<div class="dashboardlink">
        <a href="staffaction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1 align="center">Approve pending Account</h1>
    </div>
    <form class="uform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Account Number </label>

            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <button name="info" class="btn">Get Details</button>
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
                <form class="uform" method="post" action=' . $_SERVER['PHP_SELF'] . '>
                <input type="hidden" name="account_no" value=' . $arr['account_no'] . '>
                <button type="submit" name="confirm" class="btn" style="width: 160px; margin:20px auto auto 70px; ">Approve</button>
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