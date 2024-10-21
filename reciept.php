<?php
$quantity = 0;
$total_price = 0;
$change = 0;
$cash = 0;
$menu = [
    ['name' => 'Burger', 'price' => 50],
    ['name' => 'Fries', 'price' => 70],
    ['name' => 'Steak', 'price' => 150],
];

if (isset($_GET['submit'])) {
    $quantity = (int)$_GET['quantity'];
    $cash = (int)$_GET['cash'];
    $order = (int)$_GET['order'];

    if ($order >= 0 && $order < count($menu)) {
        $item = $menu[$order]; 
        $total_price = $item['price'] * $quantity; 
    }

    $change = $cash - $total_price;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reciept </h1> 
    <h1>Total Price: <?php echo $total_price?><br> You paid:  <?php echo $cash?> <br> Change:  <?php echo $change?></h1>
</body>
</html>

