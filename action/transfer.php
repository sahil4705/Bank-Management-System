<?php
include 'db_connect.php';
include 'useraction.php';
@$payer_account_no = $_POST['paccont_number'];
@$recipient_account_no = $_POST['raccont_number'];
@$amount = $_POST['amount'];
if (isset($_POST['transfer'])) {
    $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$payer_account_no' ");
    $ress = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$recipient_account_no' ");

    if (mysqli_num_rows($res) > 0 && mysqli_num_rows($ress) > 0 && $payer_account_no != $recipient_account_no) {
        $row = mysqli_fetch_assoc($res);
        $roww = mysqli_fetch_assoc($ress);
        $payer_current_amount = $row['balance'];
        $recipient_current_amount = $roww['balance'];
        $pid = $row['id'];
        $rid = $roww['id'];
        $payer_final_amount = $payer_current_amount - $amount;
        @$recipient_final_amount = $recipient_current_amount + $amount;
        date_default_timezone_set('Asia/Kolkata');
        $done_at = date("d/m/y h:i:s A");
        if ($payer_final_amount <= 500) {
            echo '<script>    
            alert("Not Enough Balance to Transfer...");
            </script>'; 
        }
        else{
            $insq = mysqli_query($con, "INSERT INTO transaction (id , account_no , transaction_type , amount , total_amount , done_at) VALUES ('$pid' , '$payer_account_no' , 'transfer to $recipient_account_no' , '$amount' , '$payer_final_amount' , '$done_at')");
            $insq2 = mysqli_query($con, "INSERT INTO transaction (id , account_no , transaction_type , amount , total_amount , done_at) VALUES ('$rid','$recipient_account_no' , 'recive from $payer_account_no' , '$amount' , '$recipient_final_amount' , '$done_at')");

            if ($insq && $insq2 ) {
                $sql = "UPDATE account_open SET balance = '$payer_final_amount' WHERE account_no = '$payer_account_no' ";
                $sqll = "UPDATE account_open SET balance = '$recipient_final_amount' WHERE account_no = '$recipient_account_no' ";
                if (mysqli_query($con, $sql)) {
                    if (mysqli_query($con, $sqll)) {
                        echo '<script>    
                        alert(" Amount Has Been Transfered Successfully");
                        </script>';
                    }
                }
            }
        }
    } else {
        echo '<script>    
        alert(" Please Enter Valid Account Number ");
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
    <title>Transfer Money</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
<div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1> Transfer Money</h1>
    </div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Account Number Of Payer </label>
            <input type="text" name="paccont_number" class="a" required>
        </div>
        <div class="input">
            <label>Enter Account Number Of Recipient </label>
            <input type="text" name="raccont_number" class="a" required>
        </div>
        <div class="input">
            <label>Enter Amount </label>
            <input type="text" name="amount" class="a" required><br>
        </div>
        <div class="input">
            <button type="submit" name="transfer" class="btn">Transfer</button>
        </div>
    </form>
</body>

</html>