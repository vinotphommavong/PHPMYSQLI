<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
echo "ຊື່:".$row->fname."<br>";
echo "ນາມສະກຸນ:".$row->lname."<br>";
echo "ເພດ:".$row->gender."<br>";
echo "ທັກສະ:".$row->skill."<br>";
echo "<hr>";
$row = mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
echo "ຊື່:".$row->fname."<br>";
echo "ນາມສະກຸນ:".$row->lname."<br>";
echo "ເພດ:".$row->gender."<br>";
echo "ທັກສະ:".$row->skill."<br>";
echo "<hr>";
$row = mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
echo "ຊື່:".$row->fname."<br>";
echo "ນາມສະກຸນ:".$row->lname."<br>";
echo "ເພດ:".$row->gender."<br>";
echo "ທັກສະ:".$row->skill."<br>";
echo "<hr>";
$row = mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
echo "ຊື່:".$row->fname."<br>";
echo "ນາມສະກຸນ:".$row->lname."<br>";
echo "ເພດ:".$row->gender."<br>";
echo "ທັກສະ:".$row->skill."<br>";
echo "<hr>";
$row = mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
echo "ຊື່:".$row->fname."<br>";
echo "ນາມສະກຸນ:".$row->lname."<br>";
echo "ເພດ:".$row->gender."<br>";
echo "ທັກສະ:".$row->skill."<br>";
echo "<hr>";
$row = mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
echo "ຊື່:".$row->fname."<br>";
echo "ນາມສະກຸນ:".$row->lname."<br>";
echo "ເພດ:".$row->gender."<br>";
echo "ທັກສະ:".$row->skill."<br>";
echo "<hr>";
$row = mysqli_fetch_object($result);

echo "ລະຫັດພະນັກງານ:".$row->id."<br>";
echo "ຊື່:".$row->fname."<br>";
echo "ນາມສະກຸນ:".$row->lname."<br>";
echo "ເພດ:".$row->gender."<br>";
echo "ທັກສະ:".$row->skill."<br>";
echo "<hr>";

?>