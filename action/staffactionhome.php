
<?php
include 'db_connect.php';
include 'staffaction.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/info.css">
    
</head>

<body>
    <div class="dwelcome">
        <h1> Hello, <?php echo $_SESSION['suser'];?></h1>
    </div>
</body>

</html>