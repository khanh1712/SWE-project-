<!DOCTYPE html>

<html>
    <head>
        <title>Car parking anagement</title>
    </head>

    <body>
        <h1>Change parameters</h1>
        <form action="changeBackend.php" method="post">
            <label for="carType">Car type: </label>
            <select name="carType" id="carType" required>
                <option value="normal">Normal</option>
                <option value="electric">Electric</option>
            </select>
            <br><br>

            <label for="price">New price: </label>
            <input type="number" name="price" id="price" required>
            <br><br>
            
            <label for="ticket">Membership type</label>
            <select name="ticket" id="ticket" required>
                <option value="one-time">One-time ticket</option>
                <option value="member">Member</option>
            </select>
            <br><br>

            <label for="discount">New discount: </label>
            <input type="number" name="discount" id="discount" required>
            <br><br>

            <input type="submit" name="update" value="Update">
        </form>
    </body>
</html>