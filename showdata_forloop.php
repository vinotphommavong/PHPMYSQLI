<?php 
require('dbconnect.php');

$sql = "select * from employees";
$result = mysqli_query($con,$sql);

$count = mysqli_num_rows($result);

for($i=0; $i<$count;$i++){
    $row = mysqli_fetch_object($result);
    echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
    echo "ຊື່:".$row->fname."<br>";
    echo "ນາມສະກຸນ:".$row->lname."<br>";
    echo "ເພດ:".$row->gender."<br>";
    echo "ທັກສະ:".$row->skill."<br>";
    echo "<hr>";
}

?>