<?php
include 'connection.php';
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $balance=$_POST['balance'];

    $sql ="insert into users(name, email, mobile, balance)values('$name','$email', '$mobile', '$balance')";
    $result=mysqli_query($conn,$sql);
    if($result){
      header('location:display.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title></title>
    <h1>Customer Details</h1>
  </head>
  <body>
    <div class="container my-5" >
    <form method="post">
  <div class="mb-3">
    <label  class="name">User Name :</label>
    <input type="text" class="form-control" placeholder="enter customer's name" name="name" required>
  </div>
  <div class="mb-3">
    <label  class="name">Email id :</label>
    <input type="text" class="form-control" placeholder="enter customer's email" name="email" required>
  </div>
  <div class="mb-3">
    <label  class="name">Mobile number  :</label>
    <input type="number" class="form-control" placeholder="enter customer's mobile no" name="mobile" required>
  </div>
  <div class="mb-3">
    <label  class="name">Account balance :</label>
    <input type="text" class="form-control" placeholder="enter customer's balance" name="balance" required>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
  </body>
</html>