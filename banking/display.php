<?php
include 'connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="customer.php" class="text-light">Add user</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SI no</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email id</th>
      <th scope="col">Acccount Balance</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  
  $sql="Select * from users";
  $result=mysqli_query($conn,$sql);
  if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id =$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $balance=$row['balance'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$mobile.'</td>
        <td>'.$email.'</td>
        <td>'.$balance.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>

      </tr>';
    }
  }
  ?>

        
    
  </tbody>
</table>


</body>
