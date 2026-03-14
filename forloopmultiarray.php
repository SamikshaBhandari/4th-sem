<?php
$items = [
    ["name" => "Keyboard", "stock" => 15],
    ["name" => "Monitor",  "stock" => 5],
    ["name" => "Printer",  "stock" => 0]
];
echo "<h3>Inventory List:</h3>";
foreach ($items as $product) {
    echo "Product: " . $product['name'] . " | Stock: " . $product['stock'] . "<br>";
}
?>