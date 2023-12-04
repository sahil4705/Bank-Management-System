<?php
include 'db_connect.php';
include 'staffaction.php';
@$account_no = $_POST['account_no'];
@$amount = $_POST['amount'];
if (isset($_POST['deposit'])) {
    $res = mysqli_query($con, "SELECT * FROM account_open WHERE account_no = '$account_no' ");
    if (!mysqli_num_rows($res) > 0) {
        echo '<script>    
        alert(" Please Enter Valid Account Number ");
        </script>';
    }else {
        $row = mysqli_fetch_assoc($res);
        $current_amount = $row['balance'];
        $id = $row['id'];
        $final_amount = $current_amount + $amount;
        date_default_timezone_set('Asia/Kolkata');
        $done_at = date("d/m/y h:i:s A");
        $ress = mysqli_query($con, "INSERT INTO transaction (id , account_no , transaction_type , amount , total_amount , done_at) VALUES ('$id', '$account_no' , 'deposit' , '$amount' , '$final_amount' , '$done_at') ");
        if ($ress) {
            $sql = "UPDATE account_open SET balance = '$final_amount' WHERE account_no = '$account_no' ";
            if (mysqli_query($con, $sql)) {
                echo '<script>    
                alert(" Amount has been deposit successfully ");
                </script>';
            }
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
    <title>Deposit Money</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
    <div class="header">
        <h1> Deposit Money </h1>
    </div>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <label>Enter Amount </label>
            <input type="text" name="amount" required>
        </div>
        <div class="input">
            <button type="submit" name="deposit" class="btn">Deposit</button>
        </div>
    </form>
</body>

</html>