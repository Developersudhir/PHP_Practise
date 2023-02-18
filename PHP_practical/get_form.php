<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form using get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      h2{
        text-align: center;
      }
      form{
        width: 40%;
        margin: 0% auto;
      }
      .btn{
        margin-bottom: 6%;
      }
    </style>
</head>
<body>
<h2>PHP Form Using GET Request</h2>
  <form action="get_disp_form.php" method="get"> 
<div class="mb-3">
  <label for="username" class="form-label">User Name</label>
  <input type="text"  name="Uname" class="form-control" id="username" placeholder="John Doe">
</div>
<div class="mb-3">
  <label for="mail" class="form-label">Mail Address</label>
  <input type="email" name="Umail" class="form-control" id="usermail" placeholder="abc@gmail.com">
</div>
<div class="mb-3">
  <label for="password" class="form-label">Password</label>
  <input type="password" name="password" class="form-control">
</div>
<button class="btn btn-outline-primary" name="submit">Submit</button>
</form> 
</div>
</body>
</html>