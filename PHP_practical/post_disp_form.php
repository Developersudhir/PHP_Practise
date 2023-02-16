<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .info{
            
        }
    </style>
</head>
<body>
<?php
  if(isset($_POST['submit'])){
    $name=$_POST['Uname'];
    $mail=$_POST['Umail'];
    $phone=$_POST['Uphone'];
    $stream=$_POST['stream'];
    $gender=$_POST['gender'];
    $desc=$_POST['desc'];
    }?>
<h3>Stored Information In Form</h3>
<div class="info">
<h6>Name : <?php echo $name;?></h6>
<h6>Mail Address : <?php echo $mail;?></h6>
<h6>Phone Number : <?php echo $phone;?></h6>
<h6>Stream : <?php echo $stream;?></h6>
<h6>Gender : <?php echo $gender;?></h6>
<h6>Description : <?php echo $desc;?></h6>
</body>
</html>