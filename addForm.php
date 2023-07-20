<!DOCTYPE html>
<html>
    <head>
        <title>Car parking management</title>
    </head>
    
    <body>
        <h1>Add car to database</h1>
        <form action="addBackend.php" method="post">
            <label for="carPlate">Car plate:</label>
            <input type="text" name="carPlate" id="carPlate" placeholder="12A3 45678" required>
            <br><br>

            <label for="carType">Car type:</label>
            <select name="carType" id="carType" required>
                <option value="normal">Normal car</option>
                <option value="electric">Electric car (with charging service)</option>
            </select>
            <br><br>
            <label for="ticket">Ticket:</label>

            <select name="ticket" id="ticket" required>
                <option value="one-time">One-time ticket</option>
                <option value="member">Member ticket</option>
            </select>
            <br><br>
            <input type="submit" name="addCar" value="Add to car park">
        </form>
    </body>


</html>
