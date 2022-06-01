<?php
require("dbconnect.php");

$id = $_POST["id"];

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];

$emskill = implode(',',$_POST["skills"]); //array=>string

//update picture

//var_dump($_FILES);
//echo $fname;

if($_FILES['upload']['tmp_name']){
    $tmp = explode(".", $_FILES['upload']['name']);
    $ext = end($tmp);
    $avatar = "avatars/".md5(uniqid()).".{$ext}";

    move_uploaded_file($_FILES['upload']['tmp_name'],$avatar);
    //DELETE OLD PIC AND CHECK IS THERE AN OLD PIC
    if($_POST['avat']){
        unlink($_POST['avat']);
    }
}else{
    //Get old Picture
    $avatar=$_POST['avat'];
}

$sql = "UPDATE employees SET fname='$fname', lname='$lname', gender='$gender', skill='$emskill', av='$avatar' WHERE id='$id' ";
//echo $sql;
$result = mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "error to Update".mysqli_error($con);
}

?>