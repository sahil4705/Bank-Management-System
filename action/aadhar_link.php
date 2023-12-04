<?php
include 'db_connect.php';
include 'useraction.php';
@$account_no = $_POST['account_no'];
@$aadhar_card_no = $_POST['aadhar_card_no'];
if (isset($_POST['link'])) {
    $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' ");
    if (!mysqli_num_rows($res) > 0) {
        echo '<script>
        alert(" Please Enter Valid Account Number ");
        location="aadhar_link.php";
        </script>';
    } else {
        $qry = "UPDATE account_open SET aadhar_card_no = '$aadhar_card_no' , 	is_aadhar_link = 'Linked' WHERE account_no = '$account_no' ";
        if (mysqli_query($con, $qry)) {
            echo '<script>
                     alert(" Aadhar Card Link Successfully");
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
    <title>Aadhar Card Link</title>
    <script src="../js/validateaadhar.js"></script>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
<div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1> Aadhar Card Link </h1>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateaadhar()">

        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <label> Enter Aadhar Card Number </label>
            <input type="text" name="aadhar_card_no" id="aadhar_card_no" required>
        </div>
        <div class="input">
            <button type="submit" name="link" class="btn">Confirm</button>
        </div>
    </form>
</body>
</html>