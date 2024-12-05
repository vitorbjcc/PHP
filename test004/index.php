<?php 
$bestSellers = ["Chocolate", "Mints", "Fudge", "Bubble gum", "Toffe", "Jelly beans"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>The Candy Store</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
        <li><?php echo $bestSellers[0]; ?></li>
        <li><?php echo $bestSellers[1]; ?></li>
        <li><?php echo $bestSellers[2]; ?></li>
    </ul>
</body>
</html>