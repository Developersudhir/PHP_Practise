<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form using post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      h2,h3{
        text-align: center;
      }
      form{
        width: 40%;
        margin: 0% auto;
      }
      .btn{
        margin-bottom: 6%;
      }
      select{
        margin-bottom: 3%;
      }
      input[type="radio"]{
        margin-left: 2%;
      }
    </style>
</head>
<body>
<h2>PHP Form Using POST Request</h2>
  <form action="post_disp_form.php" method="post"> 
<div class="mb-3">
  <label for="username" class="form-label">User Name</label>
  <input type="text"  name="Uname" class="form-control" id="username" placeholder="John Doe">
</div>
<div class="mb-3">
  <label for="mail" class="form-label">Mail Address</label>
  <input type="email" name="Umail" class="form-control" id="usermail" placeholder="abc@gmail.com">
</div>
<div class="mb-3">
  <label for="userphone" class="form-label">Phone Number</label>
  <input type="text" name="Uphone" class="form-control" id="usephone">
</div>
<select name="stream" class="form-select" aria-label="Default select example">
  <option value="BSc. C.S." selected>BSc. C.S.</option>
  <option value="BSc. I.T.">BSc. I.T.</option>
  <option value="B.C.A.">B.C.A.</option>
</select>
<div class="radio">
  <input type="radio" name="gender"  value="female"> Female
  <input type="radio" name="gender"  value="male"> Male
  <input type="radio" name="gender" value="other"> Other
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" name="desc" rows="3"></textarea>
</div>
<button class="btn btn-outline-primary" name="submit">Submit</button>
</form> 
</div>
</body>
</html>