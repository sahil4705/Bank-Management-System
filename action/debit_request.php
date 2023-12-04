<?php
include 'db_connect.php';
include 'useraction.php';
@$account_no = $_POST['account_no'];
if (isset($_POST['confirm'])) {
    $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' ");
    $ress = mysqli_query($con, "SELECT * FROM debit_request WHERE account_no = '$account_no' ");
    if (!mysqli_num_rows($ress) > 0) {
        if (!mysqli_num_rows($res) > 0) {
            echo '<script>
            alert(" Please Enter Valid Account Number ")
            </script>';
        } else {
            $row = mysqli_fetch_assoc($res);
            $id = $row['id'];
            date_default_timezone_set('Asia/Kolkata');
            $request_date = date("d/m/y h:i:s A");
            $resss = mysqli_query($con, "INSERT INTO debit_request (id, account_no,request_date) VALUES ('$id' , '$account_no' ,'$request_date') ");
            if ($resss) {
                echo '<script>
                    alert(" Your Request For Debit Card Successfully Send... \n Our Bank Will Send Your Debit Card with 10 or 15 At Your Address Day\n Through Post")
                    </script>';
            }
        }
    } else {
        echo '<script>
        alert("Your Request Has Alredy send..\n Please Wait Our Bank Will Send Your Debit Card Within Few Days..")
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
    <title>Request For Debit Card</title>

    <link rel="stylesheet" href="../css/info.css">

</head>

<body>
<div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1>Request For Debit Card</h1>
    </div>

    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <button type="submit" name="confirm" class="btn" value="Confirm">confirm</button>
        </div>
    </form>

</body>

</html>