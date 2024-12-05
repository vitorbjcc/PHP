<?php 
$offers = [
    [ "name" => "Chocolate", "price" => 5 ],
    [ "name" => "Cake", "price" => 10 ],
    [ "name" => "Milkshake", "price" => 7 ]
];
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
    <h2>Offers</h2>
    <p>
        <?php echo $offers[0]["name"]; ?> -
        $<?php echo $offers[0]["price"]; ?>
    </p>
    <p>
        <?php echo $offers[1]["name"]; ?> -
        $<?php echo $offers[1]["price"]; ?>
    </p>
    <p>
        <?php echo $offers[2]["name"]; ?> -
        $<?php echo $offers[2]["price"]; ?>
    </p>
</body>
</html>