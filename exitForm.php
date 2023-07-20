<!DOCTYPE html>

<html>
    <head>
        <title>Car parking management</title>
    </head>

    <body>
        <h1>Exit a car</h1>
        <form action="exitBackend.php" method="post">
            <label for="carPlate">Car plate:</label>
            <input type="text" name="carPlate" id="carPlate">
            <input type="submit" name="exitCar" value="Exit">
        </form>
    </body>
</html>