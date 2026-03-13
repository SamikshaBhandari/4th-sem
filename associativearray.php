<?php
$products = [
    ["name" => "Laptop", "price" => 50000],
    ["name" => "Mouse",  "price" => 1200],
    ["name" => "Mobile", "price" => 25000]
];
echo "Item: " . $products[0]["name"] . " | Price: " . $products[0]["price"] . "<br>";
echo "Item: " . $products[1]["name"] . " | Price: " . $products[1]["price"];
?>