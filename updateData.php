<?php
require("dbconnect.php");

$id = $_POST["id"];

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];

$emskill = implode(',',$_POST["skills"]); //array=>string


$sql = "UPDATE employees SET fname='$fname', lname='$lname', gender='$gender', skill='$emskill' WHERE id='$id' ";
//echo $sql;
$result = mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "error to Update".mysqli_error($con);
}

?>