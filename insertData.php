<?php 
//connect database
require('dbconnect.php');

//get data from form to variable
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];

$emskill = implode(",",$_POST["skills"]); //array to string

//var_dump($_FILES);

//echo $_FILES['upload']['name'];
$tmp  = explode(".", $_FILES['upload']['name']); //ແຍກfileຮູບໃຫ້ເປັນarray
$ext = end($tmp); //ເລືອກເອົາ array ໂຕສຸດທ້າຍ

$avatar = "avatars/".md5(uniqid()).".{$ext}";//ຕັ້ງຊື່ file ໃໝ່ ແລະ ເກັບໄວ້ທີຢູ່ໃໝ່
//echo $avatar;
move_uploaded_file($_FILES['upload']['tmp_name'],$avatar); //ຍ້າຍ file ຈາກ folder ຊົ່ວຄວາໄປຍັງທີ່ຢູ່ໃໝ່

//insert data
$sql = "INSERT INTO employees(fname,lname,gender,skill,av) VALUES ('$fname','$lname','$gender','$emskill','$avatar')";
$result = mysqli_query($con,$sql);

if($result){
    header("location:index.php");
}else{
    echo "fail to record";
}

?>