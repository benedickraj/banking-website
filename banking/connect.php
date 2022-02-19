<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $money = $_POST['money'];

    $conn = new mysqli('localhost','root','','bankdetails');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(username, email, number, money)values(?, ?, ?, ?) ");
        $stmt->bind_param("ssii",$username, $email, $number, $money);
        $stmt->execute();
        echo "Payment successfull!!...";
        $stmt->close();
        $conn->close();
    }

?>
