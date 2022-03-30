<?php 
require('dbconnect.php');

$sql = "select * from employees";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_row($result)){
    echo "ລະຫັດພະນັກງານ:".$row[0]."<br>";
    echo "ຊື່:".$row[1]."<br>";
    echo "ນາມສະກຸນ:".$row[2]."<br>";
    echo "ເພດ:".$row[3]."<br>";
    echo "ທັກສະ:".$row[4]."<br>";
    echo "<hr>";

}

?>