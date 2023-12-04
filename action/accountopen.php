<?php
include 'db_connect.php';
include 'useraction.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $pan_number = $_POST['pan_number'];
    $home_address = $_POST['home_address'];
    $office_address = $_POST['office_address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $nominee_name = $_POST['nominee_name'];
    $nominee_account = $_POST['nominee_account'];
    $nominee_account_type = $_POST['nominee_account_type'];
    $aadhar_card_no = $_POST['aadharno'];
    $balance = $_POST['balance'];
    $ifsc = 1011;
    $Customer_ID = rand(1000, 9999);
    $branch = "Demo Branch";
    $account_no = $ifsc . rand(100, 999) . $Customer_ID;
    date_default_timezone_set('Asia/Kolkata');
    $acc_open_date = date("d/m/y h:i:s A");
    $res = mysqli_query($con, "INSERT INTO account_open (name, gender, mobile, email, birthdate, pan_number, home_address, office_address, state, city, pincode, account_no,balance, aadhar_card_no, ifsc, branch, nominee_name, nominee_account_number, nominee_account_type, acc_open_date, account_status) VALUES ('$name', '$gender', '$mobile', '$email', '$birthdate', '$pan_number', '$home_address', '$office_address', '$state', '$city', '$pincode', '$account_no', $balance, $aadhar_card_no, '$ifsc', '$branch', '$nominee_name', '$nominee_account', '$nominee_account_type', '$acc_open_date', 'pending')");
  
    if ($res) {
        echo '<script>alert("Application submitted successfully\nAccount number: '. $account_no .'\n\nPlease visit the bank with this Account number for account approval within 15 days");</script>';
        
    } else {
        echo "Error";
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Account</title>
    <script src="../js/validateform.js"></script>
    <link href="../css/bank.css" rel="stylesheet">
</head>

<body>
    <div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h3> (★) BANK ACCOUNT OPENING FORM (★)</h3>
    </div>

    <form method="post" align="center" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
        <input type="text" name="name" id="name" class="a" placeholder="Name">
        <select name="gender" id="gender" class="a">
            <option value="" disabled selected>Gender</option>
            <option value="Male">male</option>
            <option value="Female">female</option>
            <option value="Other">other</option>
        </select>
        <input type="text" name="mobile" id="mobile" class="a" placeholder="Mobile no"><br>
        <input type="email" name="email" id="email" class="b" placeholder="Email">
        <!-- <input placeholder="Date Of Birth" class="b" type="text" onfocus="(this.type='date')" id="birthdate" /> -->
        <input type="date" name="birthdate" id="birthdate" class="b" placeholder="Date Of Birth">
        <input type="text" name="pan_number" id="pan_number" class="b" placeholder="PAN Number"><br>
        <input type="text" name="home_address" id="home_address" class="c" placeholder="Home Address"><br>
        <input type="text" name="office_address" id="office_address" class="c" placeholder="Office Address (if you have)"><br>
        <input type="text" name="aadharno" id="aadharno" class="c" placeholder="Adhar Card NO"><br>
        <input type="text" name="balance" id="balance" class="c" placeholder="Balance"><br>
        <input type="text" name="state" id="state" class="b" placeholder="State">
        <input type="text" name="city" id="city" class="b" placeholder="city">
        <input type="text" name="pincode" id="pincode" class="b" placeholder="Pin code"><br>
        <input type="text" name="nominee_name" id="nominee_name" class="b" placeholder="Nominee Name (if any)">
        <input type="text" name="nominee_account" id="nominee_account" class="b" placeholder="Nominee Account no">
        <select name="nominee_account_type" id="nominee_account_type" class="b">
            <option disabled selected>Nominee Account Type</option>
            <option>Saving</option>
            <option>Current</option>
        </select><br>
        <input type="submit" name="submit" class="d" value="Submit">
    </form>
</body>
</html>