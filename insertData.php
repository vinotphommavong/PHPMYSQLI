<?php 
//connect database
require('dbconnect.php');

//get data from form to variable
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];

$emskill = implode(",",$_POST['skills']); //array to string

//insert data
$sql = "INSERT INTO employees(fname,lname,gender,skill) VALUES('$fname','$lname','$gender','$emskill')";
$result = mysqli_query($con,$sql);

if($result){
    echo "ບັນທຶກສຳເລັດແລ້ວ";
}else{
    echo "fail to record";
}

?>