<?php

require('dbconnect.php');

//print_r($_POST["id"]);

$id_arr = $_POST["idcheckbox"];

$multiple_id = implode(",",$id_arr);

//print_r($multiple_id);
//var_dump($multiple_id);

$sql = "DELETE FROM employees WHERE id in ($multiple_id)";
//echo $sql;

$result = mysqli_query($con,$sql);

if($result){
    echo "ລືບຂໍ້ມມູນສຳເລັດແລ້ວ";
    echo "<a href=index.php>ກັບໜ້າຫຼັກ</a>";
}else{
    echo " fail to delete ";
}

?>