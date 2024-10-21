<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
</head>
<body>
    <h2>Menu</h2>
    <table border="1">
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form action="reciept.php" method="GET">
        <label for="order">Select an order:</label>
        <select name="order" id="order">
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select>
        <br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity">
        <br><br>

        <label for="cash">Cash:</label>
        <input type="number" name="cash">

        <p><input type="submit" value="Submit" name="submit"></p>
        <br><br>
    </form>
</body>
</html>
