<?php
function calculateTotal($price, $discount) {
    $discountAmount = ($price * $discount) / 100;
    $finalPrice = $price - $discountAmount;
    return $finalPrice;
}
$roomPrice = 2500;
$discountPercent = 10; 
$totalToPay = calculateTotal($roomPrice, $discountPercent);
echo "Original Price: Rs. " . $roomPrice . "<br>";
echo "After 10% Discount, Total: Rs. " . $totalToPay;
?>