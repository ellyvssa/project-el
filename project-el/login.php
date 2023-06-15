<?php
include 'config.php';
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="insert into users1 (username,password) 
    values('$username','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
       echo ('Data inserted sucsessfully');
      
    }else{
        die(mysqli_error($conn));
    }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>document</title>
  </head>
  <body>
    <div class="form">
    <h1>Login Form</h1>
    <div class= "container my-5">
    <form action="" method="post">
    <div class="form-group">  
    <label>Name</label>
    <input type="text" class="form-control" 
    placeholder="Enter your name" name="username" autocomplete="off">
  </div>  

  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" 
    placeholder="Enter your password" name="password">
  </div><br>

  <button type="submit" class="btn " name="submit">Submit</a> </button>
</form>

    </div>
</div>
  </body>
</html>