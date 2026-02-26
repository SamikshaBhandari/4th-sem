<?php
$fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes");

echo "<h2>My Fruit List:</h2>";

echo "<ul>";
foreach ($fruits as $f) {
    echo "<li>" . $f . "</li>";
}
echo "</ul>";

$total = count($fruits);
echo "Total fruits in list: " . $total;
?>