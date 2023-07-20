<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    require 'connect.php';
    if (isset($_POST['exitCar'])) {
        $carPlate = $_POST['carPlate'];
    }
    $timeOut = date("Y-m-d H:i:s");
    $query = $conn->query("SELECT * FROM `database` WHERE `Car plate` = '$carPlate' AND `Cost` IS NULL");
    if ($query->num_rows == 1) {
        $row = mysqli_fetch_assoc($query);
        $timeIn = $row['Time in'];
        $price = $row['Price'];        
        $differ = strtotime($timeOut) - strtoTime($timeIn);
        $hourdiff = (int)($differ / 3600);
        $mindiff = (int)(($differ-$hourdiff*3600) / 60);
        $cost = $price * ($hourdiff + 1);

        $sql = "UPDATE `database` SET `Time out` = CAST('$timeOut' AS DATETIME), `Cost` = '$cost'
        WHERE `Car plate` = '$carPlate' AND `Cost` IS NULL";
 
        if ($conn->query($sql) === TRUE) {
            echo "Car exit <br>";
            echo "ID: " . $row['ID'] . "<br>";
            echo "Car plate: " . $carPlate . "<br>";
            echo "Car type: " . $row['Car type'] . "<br>";
            echo "Time in: " . $timeIn . "<br>";
            echo "Time out: " . $timeOut . "<br>";
            echo "Time used: " . $hourdiff . "h" . $mindiff . "m <br>";
            echo "Cost: " . $cost . " vnd <br>";
            echo "Thank you, see you again.";
        }
    }

    else {
        echo "Invalid carplate";
    }
    
?>