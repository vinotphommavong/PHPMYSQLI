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
   <h2 class="text-center">ແບບຟອມບັນທຶກຂໍ້ມູນ</h2>
    <form action="insertData.php" method="POST" enctype="multipart/form-data" >
        <div class="form-group mt-2">
            <label for="firstname">ຊື່</label>
            <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for=lastname"">ນາມສະກຸນ</label>
            <input type="text" name="lname" class="form-control">
        </div>
        <div class="form-group my-2">
            <label for="upload" >ເລືອກຮູບພາບ</label>
            <input type="file" name="upload">
        </div>
        <div class="form-group" >
            <label>ເພດ</label>
            <input type="radio" name="gender" value="male">ຊາຍ
            <input type="radio" name="gender" value="female">ຍິງ
            <input type="radio" name="gender" value="other">ອື່ນໆ
        </div>
        <div class="form-group">
            <label>ທັກສະຄວາມສາມາດ</label>
            <input type="checkbox" name="skills[]" value="HTML">HTML
            <input type="checkbox" name="skills[]" value="JAVA">JAVA
            <input type="checkbox" name="skills[]" value="PYTHON">PYTHON
            <input type="checkbox" name="skills[]" value="PHP">PHP
        </div>
        <input type="submit" value="ບັນທຶກ" class="btn btn-primary">
        <input type="reset" value="ລ້າງຂໍ້ມູນ" class="btn btn-danger">
        <a href="index.php" class="btn btn-secondary">ກັບໜ້າຫຼັກ</a>
    </form>
    
   </div>
</body>
</html>