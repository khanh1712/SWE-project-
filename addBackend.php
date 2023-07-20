<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    require 'connect.php';
    if(isset($_POST['addCar'])) {
        $carPlate = $_POST['carPlate'];
        $carType = $_POST['carType'];
        $ticket = $_POST['ticket'];
        $timeIn = date("Y-m-d H:i:s");
        $price = 5000;
    }
    
    if($carType == 'normal') {
        $price = 3000;
    }
    if($ticket == 'member') {
        $price = $price - 500;
    }

    $check = $conn->query("SELECT * FROM `database` WHERE `Car plate` = '$carPlate' AND `Time out` IS NULL");
    if ($check->num_rows != 0) {
       echo "Car have not exit, please exit first!";
    } 
    else {
        $sql = "INSERT INTO `database` (`Car plate`, `Car type`,
        `Time in`,`Ticket`, `Price`) VALUES('$carPlate', '$carType', '$timeIn', '$ticket', '$price')";


        if ($conn->query($sql) === TRUE) {
            echo "Car plate: " . $carPlate . "<br>";
            echo "Car type: " . $carType . "<br>";
            echo "Time in: " . $timeIn . "<br>";
            echo "Added to car park\n";
        } else {
            echo "Error";
        }
    }

?>