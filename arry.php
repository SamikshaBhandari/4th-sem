<?php
echo "<h2>PHP Basic Lab Tasks</h2>";

// a. Hello World
echo "<b>a. Hello World:</b> Hello, World!<br><br>";

// b. Area of Rectangle
$length = 10;
$width = 5;
$area = $length * $width;
echo "<b>b. Area of Rectangle:</b> Area is $area <br><br>";

// c. Swap without temporary variable
$a = 15; $b = 20;
echo "<b>c. Before Swap:</b> a=$a, b=$b | ";
$a = $a + $b; // a becomes 35
$b = $a - $b; // b becomes 15
$a = $a - $b; // a becomes 20
echo "<b>After Swap:</b> a=$a, b=$b <br><br>";

// d. Logical Operators with Conditional Statements
$age = 25;
$hasLicense = true;
echo "<b>d. Logical Ops:</b> ";
if ($age >= 18 && $hasLicense) {
    echo "You are eligible to drive.<br><br>";
} else {
    echo "Not eligible.<br><br>";
}

// e. Day of week using Switch
$dayNum = 3;
echo "<b>e. Switch Day ($dayNum):</b> ";
switch ($dayNum) {
    case 1: echo "Sunday"; break;
    case 2: echo "Monday"; break;
    case 3: echo "Tuesday"; break;
    case 4: echo "Wednesday"; break;
    case 5: echo "Thursday"; break;
    case 6: echo "Friday"; break;
    case 7: echo "Saturday"; break;
    default: echo "Invalid Day";
}
echo "<br><br>";

// f. First 10 natural numbers using While loop
echo "<b>f. Natural Numbers:</b> ";
$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}
echo "<br><br>";

// g. Numeric array of 5 countries using for loop
$countries = ["Nepal", "India", "USA", "Japan", "China"];
echo "<b>g. Countries (for loop):</b> ";
for ($x = 0; $x < count($countries); $x++) {
    echo $countries[$x] . ", ";
}
echo "<br><br>";

// h. Foreach loop with numeric array
echo "<b>h. Countries (foreach loop):</b> ";
foreach ($countries as $country) {
    echo "<li>$country</li>";
}
?>