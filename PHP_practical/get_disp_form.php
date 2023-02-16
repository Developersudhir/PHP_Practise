<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php
  if(isset($_GET['submit'])){
    $name=$_GET['Uname'];
    $mail=$_GET['Umail'];
    $pass=$_GET['password'];
    }?>
<h3>Stored Information In Form</h3>
<div>
<h6>Name : <?php echo $name;?></h6>
<h6>Mail Address : <?php echo $mail;?></h6>
</body>
</html>