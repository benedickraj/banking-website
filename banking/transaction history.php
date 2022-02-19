<!DOCTYPE html>
<html>
<head>
    <center><h1>Transaction History</h1></center>
    <style type="text/css">
    h1 {
        font-size: 50px;
        font-family:cursive;
        color:red;
        letter-spacing: 0.5em;
}
        table{
            border-collase: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
    th{
        background-color:#d96459;
        color:white; 
    }
    tr:nth-child(even){background-color: #f2f2f2}
    </style>
</head>
<body>
<table>
    <tr>
        <th>S.no</th>
        <th>UserName</th>
        <th>Email Id</th>
        <th>Mobile Number</th>
        <th>Amount</th>
    </tr>
    <?php
    $conn = mysqli_connect('localhost','root','','bankdetails');
    if($conn->connect_error){
        die('Connection Failed: ' .$conn->connect_error);
    }

    $sql = "SELECT id, username, email, number, money from registration";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["id"] ."</td><td>".$row["username"]. "</td><td>".$row["email"]. "</td><td>"
            .$row["number"]. "</td><td>".$row["money"]. "</td></tr>";
        }
        echo "</table>";
    }else{
        echo "o result";
    }
    
    $conn-> close();
    ?>
</table>


</body>
</html>