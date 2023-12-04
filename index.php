<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bank Manahemenet System</title>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/ajaxscript.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="home" id="home">
        <?php include './include/header.php'?>
        <?php include './include/herosection.php'?>
        <?php include './include/loginsignupform.php'?>
        <?php include './include/services.php'?>
        <?php include './include/about.php'?>
        <?php include './include/contactus.php'?>
        <?php include './include/footer.php'?>
        <script src="js/script.js"></script>
        <script>
        var isuserlogin = "<?php
                if (isset($_SESSION['user'])) {
                    echo "set";
                } else {
                    echo "notset";
                }
                ?>";
        if (isuserlogin == "set") {
            var heading = document.getElementById("userlogin");
            heading.setAttribute("href", "action/useraction.php");
        }

        var isuserlogin = "<?php
                if (isset($_SESSION['suser'])) {
                    echo "set";
                } else {
                    echo "notset";
                }
                ?>";
        if (isuserlogin == "set") {
            var heading = document.getElementById("stafflogin");
            heading.setAttribute("href", "action/staffaction.php");
        }
        </script>
</body>
</html>