<?php 
require('dbconnect.php');
$sql = "select * from employees";
$result = mysqli_query($con,$sql);

$count = mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ຂໍ້ມູນພະນັກງານໃນຖານຂໍ້ມູນ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">ຂໍ້ມູນພະນັກງານໃນຖານຂໍ້ມູນ</h1>
        <hr>
        <?php if($count){ ?>
        <form action="deleteTextField.php" method="POST" >
            <label >ລະຫັດພະນັກງານ</label>
            <input type="text" class="form-control" placeholder="ໃ່ສ່ລະຫັດພະນັກງານ" name="idemployee">
            <input type="submit" value="ລຶບ" class="btn btn-danger my-2">
        </form>
    <table border="1" class=" table table-bordered">
        <thead>
            <tr>
                <th>ລະຫັດພະນັກງານ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ເພດ</th>
                <th>ທັກສະ</th>
                <th>ລຶບຂໍ້ມູນ</th>
                <th>ລຶບຂໍ້ມູນ(checkbox)</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){  ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["fname"]; ?></td>
                <td><?php echo $row["lname"]; ?></td>
                <td>
                <?php 
                if($row["gender"]=="male"){ ?>ຊາຍ
                <?php }else if($row["gender"]=="female"){ ?>ຍິງ
                <?php }else{?> ອື່ນໆ
                <?php } ?>
            
                </td>
                <td><?php echo $row["skill"]; ?></td>
                <td>
                    <a href="deleteQueryString.php?idemp=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('ຕ້ອງການລຶບແທ້ບໍ່')">ລຶບຂໍ້ມູນ</a>
                </td>
                <form action="multipledelete.php">
                <td>
                    <div class="form">
                        <input type="checkbox" class="form-check-input" name="idcheckbox[]" value="<?php echo $row['id']; ?> ">
                    </div>
                   
                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{ ?>
        <div class="alert alert-warning">
            <h3>ບໍມີຂໍ້ມູນພະນັກງານໃນຖານຂໍ້ມູນ</h3>
        </div>

    <?php } ?>
    <a href="insertForm.php" class="btn btn-primary">ເພີ່ມພະນັກງານ</a>
    <input type="submit" value="ລຶບຂໍ້ມູນ" class="btn btn-danger">
    </form>
    </div>
    
</body>
</html>