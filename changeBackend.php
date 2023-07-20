<?php
    require 'connect.php';
    if(isset($_POST['update'])) {
        $carType = $_POST['carType'];
        $price = $_POST['price'];
        $ticket = $_POST['ticket'];
        $discount = $_POST['discount'];
    }

    $updatePrice = "UPDATE `parkprice` SET `Price` = '$price' WHERE `Car type` = '$carType'";
    $updateDiscount = "UPDATE `memberdiscount` SET `Discount` = '$discount' WHERE `Ticket` = '$ticket'";

    if ($conn->query($updateDiscount) === TRUE && $conn->query($updatePrice) === TRUE) {
        echo "Update successfully <br>";
        echo "Price of " . $carType . " car changed to " . $price . "<br>";
        echo "Discount of " . $ticket . " car changed to " . $discount . "<br>";
    }
?>