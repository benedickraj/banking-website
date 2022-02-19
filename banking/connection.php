<?php
$conn= new mysqli('localhost','root','','bankdata');
if (!$conn){
    die(mysqli_error($conn));
}
?>