<?php setcookie("User","John",time() + (86400),"/");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h3>Cookie Example</h3>
    <?php if(isset($_COOKIE["User"])){
        echo "Cookies Are Set \n";
        echo "Cookies Value => ".$_COOKIE["User"];
    }
    else{
        echo "Cookie Is Not Set!";
    }
    ?>
</body>
</html>