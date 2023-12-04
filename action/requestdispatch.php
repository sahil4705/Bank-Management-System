<?php
include 'db_connect.php';
include 'staffaction.php';
$id = $_GET['id'];
$rtype = $_GET['rtype'];

if ($rtype == "debit"){
    $table = "debit_request";
}
else{
    $table = "chequebook_request"; 
}
$res = mysqli_query($con , "DELETE FROM $table WHERE id = '$id'");
if($res){
    header("location:userrequests.php");
}
else{
    echo "Error ";
}
?>