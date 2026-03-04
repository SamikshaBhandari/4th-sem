<?php
// 1. Set the price variable
$price = 120;

// 2. Check if the price is eligible for a discount
if ($price > 100) {
    $finalPrice = $price - 10;
    echo "You got a $10 discount! Final price: $" . $finalPrice;
} else {
    echo "No discount. Final price: $" . $price;
}
?>