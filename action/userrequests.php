<?php
include 'db_connect.php';
include 'staffaction.php';

$res=mysqli_query($con,"select * from debit_request");
$ress=mysqli_query($con,"select * from chequebook_request");
?>
<!doctype html>
<html lang="en">
<head>
  <title>Users Requests</title>
  <link rel="stylesheet" href="../css/info.css">
  <script>
        function confirmdelete(){
            if(confirm("Are Sure To Dispatch ??")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
</head>
<body>
<div class="dashboardlink">
        <a href="staffaction.php">Go To Dashboard</a>
    </div>
	  <table align="center">	
			<tr>
				<th>Account Id</th>
                <th>Account Number</th>
                <th>Request For</th>
				<th>Request Date</th>
                <th>Dispatch</th>
			</tr>
			<?php while($row=mysqli_fetch_assoc($res)){?>
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['account_no']?></td>
                <td><?php echo "Debit Card"?></td>
				<td><?php echo $row['request_date']?></td>
                <td><a href='requestdispatch.php?id=<?php echo $row['id']?>&rtype=debit'  onclick ='return confirmdelete()'><button class="btn">dispatch</button></a></td>
            </tr>
			<?php } ?>
            <?php while($row=mysqli_fetch_assoc($ress)){?>
                <tr>
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['account_no']?></td>
                <td><?php echo "Cheque Book"?></td>
				<td><?php echo $row['request_date']?></td>
                <td><a href='requestdispatch.php?id=<?php echo $row['id']?>&rtype=cheque' onclick ='return confirmdelete()'><button class="btn">dispatch</button></a></td>
                </tr>
                <?php } ?>
	  </table> 
</body>
</html>