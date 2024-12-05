<?php 
// How much money did user spend at the purchase
$purchaseValue = 150;

// How much discount there will be if the purchase be larger than $100
$discount = 20;

// Create variable where will have the text of a paragraph that will be added at HTML code
$paragraphText = "";

// If user's purchase is larger than $100
if ($purchaseValue > 100)
{
    // Create total with discount
    $discountTotal = $purchaseValue - ($purchaseValue / 100 * $discount);

    // Create variable that saves user's economy
    $economy = $purchaseValue - $discountTotal;

    // Adjust paragraph's text
    $paragraphText = "Your purchase is larger than $100! Now the total with 20% off will be $$discountTotal. You will be saving $$economy!<br>(usual total price $$purchaseValue)";
}
// If user's purchase is smaller than $100
else
{
    // Adjust paragraph's text
    $paragraphText = "The full price of your purchase will be $$purchaseValue"; 
}
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
    <h2>We're having 20% off for purchases larger than $100</h2>
    <p><?php echo $paragraphText; ?></p>
</body>
</html>