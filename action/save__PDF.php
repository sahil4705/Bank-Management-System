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

<?php
        include 'db_connect.php';
        @$account_no = $_POST['account_no'];
        if (isset($_POST['info'])) {
            $res = mysqli_query($con, "SELECT * FROM transaction WHERE account_no = '$account_no' ");

            if (mysqli_num_rows($res) > 0) {
    ?>
    <table align="center">
        <tr>
            <th>Date And Time</th>
            <th>Transaction Type</th>
            <th>Amount</th>
            <th>Total Amount After Transaction </th>
        </tr>
        <?php        
                while ($arr = mysqli_fetch_row($res)) {                 
                    echo"<tr><td>";
                    echo $arr[5];
                    echo"</td><td>";
                    echo $arr[2];
                    echo"</td><td>";
                    echo $arr[3];
                    echo"</td><td>";
                    echo $arr[4];
                    echo "</td>";
                }
                    echo "</table>";
            } else {
                echo '<script>    
                alert(" Please Enter Valid Account Number ")
                location = "transaction.php";
                </script>';

            }
        }




	if (isset($_POST['info2'])) {
            $res = mysqli_query($con, "SELECT * FROM transaction WHERE account_no = '$account_no' ");
	    $userinfo = "SELECT account_open.name, account_open.account_no,account_open.branch
		         FROM account_open INNER JOIN transaction ON 						             	 account_open.account_no = transaction.account_no";

		require("fpdf/fpdf.php");
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf-> SetFont("Arial","B",14);
		$pdf -> Cell(0,10,"ABC Bank Transaction Details",1,1,'C');
		$pdf -> Ln(10);

		$get=mysqli_query($con, $userinfo);
		if($row=mysqli_fetch_array($get))
		{	
			$pdf -> Cell(0,0,"Name      :".$row['name'],0,1,'L');
			$pdf -> Ln(8);	
			$pdf -> Cell(0,0,"Account No:".$row['account_no'],0,1,'L');
			$pdf -> Ln(10);		
		}


            if (mysqli_num_rows($res) > 0) { 

	

		while ($arr = mysqli_fetch_row($res)) { 

				$pdf -> Cell(53,12,$arr[5],1,0,'C');
				$pdf -> Cell(63,12,$arr[2],1,0,'C');
				$pdf -> Cell(38,12,$arr[3],1,0,'C');
				$pdf -> Cell(38,12,"$arr[4]",1,1,'C');              
                    
			
                   
                }

		$pdf -> output();
          	
            } else {
                echo '<script>    
                alert(" Please Enter Valid Account Number ")
                location = "transaction.php";
                </script>';

            }
        }


    //mysqli_close($con);
    ?>

</body>

</html>