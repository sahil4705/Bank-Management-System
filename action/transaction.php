<?php include 'useraction.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Transaction Detail</title>
    <link rel="stylesheet" href="../css/info.css">
</head>

<body>
    <div class="dashboardlink">
        <a href="useraction.php">Go To Dashboard</a>
    </div>
    <div class="header">
        <h1> Account's Transaction Detail </h1>
    </div>
    <form method="post" action="save__PDF.php">
        <div class="input">
            <label>Enter Account Number </label>
            <input type="text" name="account_no" required>
        </div>
        <div class="input">
            <button type="submit" name="info" class="btn">Show</button>
     
            <button type="submit" name="info2" class="btn"> Print </button>
        </div>
    </form>
</body>

</html>