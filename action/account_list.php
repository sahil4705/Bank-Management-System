<?php
include 'db_connect.php';
include 'staffaction.php';
$res=mysqli_query($con,"select * from account_open");
?>
<!doctype html>
<html lang="en">
<head>
  <title>All Accounts List</title>
  <link rel="stylesheet" href="../css/info.css">
</head>
<body>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<!-- <canvas class="my-4 w-5" id="myChart" width="200" height="380"></canvas> -->
	  <table>	
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Mobile No</th>
				<th>Email</th>
				<th>Birthdate</th>
				<th>Pan Number</th>
				<th>Home Address</th>
				<th>Office Address</th>
				<th>State</th>
				<th>City</th>
				<th>pincode</th>
				<th>Account No</th>
				<th>Balance</th>
				<th>Aadhar Card No</th>
				<th>Ifsc</th>
				<th>Branch</th>
				<th>Nominee Name</th>
				<th>Nominee Account NO</th>
				<th>Nominee Account Type</th>
				<th>Account Open Date</th>
				<th>Is AAdhar Link</th>
				<th>Account Status</th>
			</tr>
			<?php while($row=mysqli_fetch_assoc($res))
			{?>
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['mobile']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['birthdate']?></td>
				<td><?php echo $row['pan_number']?></td>
				<td><?php echo $row['home_address']?></td>
				<td><?php echo $row['office_address']?></td>
				<td><?php echo $row['state']?></td>
				<td><?php echo $row['city']?></td>
				<td><?php echo $row['pincode']?></td>
				<td><?php echo $row['account_no']?></td>
				<td><?php echo $row['balance']?></td>
				<td><?php echo $row['aadhar_card_no']?></td>
				<td><?php echo $row['ifsc']?></td>
				<td><?php echo $row['branch']?></td>
				<td><?php echo $row['nominee_name']?></td>
				<td><?php echo $row['nominee_account_number']?></td>
				<td><?php echo $row['nominee_account_type']?></td>
				<td><?php echo $row['acc_open_date']?></td>
				<td><?php echo $row['is_aadhar_link']?></td>
				<td><?php echo $row['account_status']?></td>
			</tr>
			<?php
		 }
		  ?>
	  </table> 
	  </main>
</body>
</html>