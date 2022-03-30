<?php
require('dbconnect.php');

$id = $_POST['idemployee'];

$sql = "DELETE FROM employees WHERE id='$id' ";

$result = mysqli_query($con,$sql);

if($result){
    echo "ລືບຂໍ້ມມູນສຳເລັດແລ້ວ";
    echo "<a href=index.php>ກັບໜ້າຫຼັກ</a>";
}else{
    echo " fail to delete ";
}

?>