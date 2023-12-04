<?php
    include 'db_connect.php';
    $accountno = $_POST['accountno'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $pan_number = $_POST['pan_number'];
    $home_address = $_POST['home_address'];
    $office_address = $_POST['office_address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $nominee_name = $_POST['nominee_name'];
    $nominee_account_number = $_POST['nominee_account_number'];
    $nominee_account_type = $_POST['nominee_account_type'];
    
    $res = mysqli_query($con, "UPDATE account_open set name = '$name', gender = '$gender', mobile = '$mobile', email = '$email', birthdate = '$birthdate', pan_number = '$pan_number', home_address = '$home_address', office_address = '$office_address', state = '$state', city = '$city', pincode='$pincode', nominee_name = '$nominee_name', nominee_account_number = '$nominee_account_number', nominee_account_type = '$nominee_account_type' WHERE account_no='$accountno'");
    if($res){
        echo '<script>
        alert("Updated Successfully...")
        location="updateinfo.php";
        </script>';
    }
    ?>