<?php
require("dbconnect.php");
$name = $_POST["empname"];

$sql = "SELECT * FROM employees WHERE fname LIKE '%$name%' ORDER BY fname ASC";
$result = mysqli_query($con,$sql);


//print_r($row);
$count = mysqli_num_rows($result);
$order = 1;
?>

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
        <form action="searchData.php" method="POST" >
            <label for="">ຄົ້ນຫາພະນັກງານ</label>
            <input type="text" class="form-control" placeholder="ປ້ອນຊື່ພະນັກງານ" name="empname">
            <input type="submit" value="Search" class="btn btn-dark my-2">
        </form>
    <table border="1" class=" table table-bordered">
        <thead>
            <tr>
                <th>ລຳດັບ</th>
                <th>ລະຫັດພະນັກງານ</th>
                <th>ຊື່</th>
                <th>ນາມສະກຸນ</th>
                <th>ເພດ</th>
                <th>ທັກສະ</th>
                <th>ແກ້ໄຂ</th>
                <th>ລຶບຂໍ້ມູນ</th>
                <th>ລຶບຂໍ້ມູນ(checkbox)</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){  ?>
            <tr>
                <td><?php echo $order++; ?></td>
                <td><?php echo $row["id"]; ?> </td>
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
                <a href="editForm.php?id=<?php echo $row["id"];?>" class="btn btn-primary">ແກ້ໄຂ</a>    
                </td>
                <td>
                    <a href="deleteQueryString.php?idemp=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('ຕ້ອງການລຶບແທ້ບໍ່')">ລຶບຂໍ້ມູນ</a>
                </td>
                <form action="multipledelete.php" method="POST">
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
            <h3>ບໍພົບຂໍ້ມູນພະນັກງານທີ່ຄົ້ນຫາ</h3>
        </div>

    <?php } ?>
    <a href="index.php" class="btn btn-primary">ກັບໜ້າທຳອິດ</a>
    <input type="submit" value="ລຶບຂໍ້ມູນ(Checkbox)" class="btn btn-danger">
    
    </form>
    <button class="btn btn-info" onclick="checkAll()" >ເລືອກທັງໝົດ</button>
    <button class="btn btn-warning"  onclick="uncheckAll()" >ຍົກເລີກ</button>
    </div>
    
</body>
<script>
    function checkAll(){
        var form_element = document.forms[1].length; //4
        for(i=0;i<form_element-1;i++){
            document.forms[1].elements[i].checked=true;
        }
    }
    function uncheckAll(){
        var form_element = document.forms[1].length; //4
        for(i=0;i<form_element-1;i++){
            document.forms[1].elements[i].checked=false;
        }
    }
</script>


</html>