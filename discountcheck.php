<?php
$price = 120;

if ($price > 100) {
    $finalPrice = $price - 10;
    echo "You got a $10 discount! Final price: $" . $finalPrice;
} else {
    echo "No discount. Final price: $" . $price;
}
?>