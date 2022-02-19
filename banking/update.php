<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="Select * from users where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$balance=$row['balance'];
$name=$row['name'];
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $balance=$_POST['balance'];

    $sql ="update users set id='$id',name='$name',email='$email',mobile='$mobile',balance='$balance'
    where id=$id";
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
    <input type="text" class="form-control" placeholder="enter customer's name" name="name" value=<?php echo $name;?> required>
  </div>
  <div class="mb-3">
    <label  class="name">Email id :</label>
    <input type="text" class="form-control" placeholder="enter customer's email" name="email" value=<?php echo $email;?> required>
  </div>
  <div class="mb-3">
    <label  class="name">Mobile number  :</label>
    <input type="number" class="form-control" placeholder="enter customer's mobile no" name="mobile"value=<?php echo $mobile;?> required>
  </div>
  <div class="mb-3">
    <label  class="name">Account balance :</label>
    <input type="text" class="form-control" placeholder="enter customer's balance" name="balance" value=<?php echo $balance;?> required>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

   
  </body>
</html>