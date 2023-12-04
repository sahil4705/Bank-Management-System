<?php include 'staffaction.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Info Update</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
    <div class="dashboardlink">
        <a href="staffaction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1 align="center"> Account Information Update </h1>
    </div>

    <form class="uform" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
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
                ?>
    <form method="post" action="update2.php">
        <div class="input">
            <label>Account Number </label>
            <input type="text" name="" disabled value="<?php echo $arr['account_no']; ?>">
            <input type="hidden" name="accountno" value="<?php echo $arr['account_no']; ?>">
        </div>
        <div class="input">
            <label>Name </label>
            <input type="text" name="name"  value="<?php echo $arr['name']; ?>">
        </div>
        <div class="input">
            <label>Gender </label>
            <select name="gender" id="gender">
                <option value="" disabled selected>Gender</option>
                <option value="Male" <?php if($arr['gender'] == 'Male') echo "selected"; ?>>male</option>
                <option value="Female" <?php if($arr['gender'] == 'Female') echo "selected"; ?>>female</option>
                <option value="Other" <?php if($arr['gender'] == 'Other') echo "selected"; ?>>other</option>
            </select>
        </div>
        <div class="input">
            <label> Mobile Number</label>
            <input type="text" name="mobile" value="<?php echo $arr['mobile']; ?>">
        </div>
        <div class="input">
            <label> Email</label>
            <input type="email" name="email" value="<?php echo $arr['email']; ?>">
        </div>
        <div class="input">
            <label> Birthdate</label>
            <input type="date" name="birthdate" value="<?php echo $arr['birthdate']; ?>">
        </div>
        <div class="input">
            <label> Pan Number</label>
            <input type="text" name="pan_number" value="<?php echo $arr['pan_number']; ?>">
        </div>
        <div class="input">
            <label> Home Address</label>
            <input type="text" name="home_address" value="<?php echo $arr['home_address']; ?>">
        </div>
        <div class="input">
            <label> Office Address</label>
            <input type="text" name="office_address"
                value="<?php if( $arr['office_address'] == "Not Specified"){ echo "";}else{$arr['office_address'];} ?>">
        </div>
        <div class="input">
            <label> State</label>
            <input type="text" name="state" value="<?php echo $arr['state']; ?>">
        </div>
        <div class="input">
            <label> City</label>
            <input type="text" name="city" value="<?php echo $arr['city']; ?>">
        </div>
        <div class="input">
            <label> PinCode</label>
            <input type="text" name="pincode" value="<?php echo $arr['pincode']; ?>">
        </div>
        <div class="input">
            <label>Nominee name </label>
            <input type="text" name="nominee_name"
                value="<?php if( $arr['nominee_name'] == "Not Specified"){ echo "";}else{$arr['nominee_name'];} ?>">
        </div>
        <div class="input">
            <label>Nominee Account Number </label>
            <input type="text" name="nominee_account_number"
                value="<?php if( $arr['nominee_account_number'] == "Not Specified"){ echo "";}else{$arr['nominee_account_number'];} ?>">
        </div>
        <div class="input">
            <label>Nominee Account Type </label>
            <select name="nominee_account_type" id="nominee_account_type" class="b">
                <option disabled selected>Nominee Account Type</option>
                <option <?php if($arr['nominee_account_type'] == 'Saving') echo "selected"; ?>>Saving</option>
                <option <?php if($arr['nominee_account_type'] == 'Current') echo "selected"; ?>>Current</option>
            </select>
        </div>
        <div class="input">
            <button type="submit" name="update" class="btn" style="margin-top:15px">Update</button>
        </div>

    </form>
    <?php
            }
            mysqli_close($con);
        } else {
            echo '<script>    
            alert(" Please Enter Valid Account Number ")
            location = "info.php";
            </script>';
        }
    }
    ?>
</body>

</html>