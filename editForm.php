<?php
require('dbconnect.php');

//echo $_GET["id"];
$id = $_GET["id"];

$sql = "SELECT * FROM employees WHERE id = $id";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);

//var_dump($row);
print_r($row);

$skill_arr = array("JAVA","PHP","PYTHON","HTML"); //ກຽມຕົວເລືອກ 

//echo $row["skill"]; string=>array

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ບັນທຶກຂໍ້ມູນພະນັກງານ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
   <div class="container mt-3">
   <h2 class="text-center">ແບບຟອມແກ້ໄຂຂໍ້ມູນ</h2>
    <form action="updateData.php" method="POST" >
        <input type="hidden" value="<?php echo $row["id"];?>" name="id" >
        <div class="form-group mt-2">
            <label for="firstname">ຊື່</label>
            <input type="text" name="fname" class="form-control" value=<?php echo $row["fname"];?> >
        </div>
        <div class="form-group my-2">
            <label for=lastname"">ນາມສະກຸນ</label>
            <input type="text" name="lname" class="form-control" value=<?php echo $row["lname"]; ?> >
        </div>
        <div class="form-group" >
            <label>ເພດ</label>
            <?php 
            if($row["gender"] == "male"){
                echo "<input type='radio' name='gender' value='male' checked>ຊາຍ";
                echo "<input type='radio' name='gender' value='female'>ຍິງ";
                echo "<input type='radio' name='gender' value='other'>ອື່ນໆ";
            }else if($row["gender"]=="female"){
                echo "<input type='radio' name='gender' value='male' >ຊາຍ";
                echo "<input type='radio' name='gender' value='female' checked>ຍິງ";
                echo "<input type='radio' name='gender' value='other'>ອື່ນໆ";
            }else{
                echo "<input type='radio' name='gender' value='male' >ຊາຍ";
                echo "<input type='radio' name='gender' value='female' >ຍິງ";
                echo "<input type='radio' name='gender' value='other' checked>ອື່ນໆ";
            }
            ?>
            
        </div>
        <div class="form-group">
            <label>ທັກສະຄວາມສາມາດ</label>
            <?php 
            $skill = explode(",", $row["skill"]); //ທັກສະຂອງພະນັກງານ

            foreach($skill_arr as $value){
                if(in_array($value,$skill)){
                    echo "<input type='checkbox' name='skills[]' value='$value' checked > $value";
                }else{
                    echo "<input type='checkbox' name='skills[]' value='$value' >$value";
                }
            }

            ?>
            <!--<input type="checkbox" name="skills[]" value="HTML">HTML
            <input type="checkbox" name="skills[]" value="JAVA">JAVA
            <input type="checkbox" name="skills[]" value="PYTHON">PYTHON
            <input type="checkbox" name="skills[]" value="PHP">PHP-->
        </div>
        <input type="submit" value="ອັບເດດຂໍ້ມູນ" class="btn btn-primary">
        <input type="reset" value="ລ້າງຂໍ້ມູນ" class="btn btn-danger">
        <a href="index.php" class="btn btn-secondary">ກັບໜ້າຫຼັກ</a>
    </form>
    
   </div>
</body>
</html>