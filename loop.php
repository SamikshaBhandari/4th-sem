<!DOCTYPE html>
<html>
<body>

<h2>Multiplication Table Generator</h2>
<form method="post">
    Enter a Number: <input type="number" name="num" required>
    <button type="submit">Generate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['num'];
    echo "<h3>Table of $n:</h3>";
    
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result <br>";
    }
}
?>

</body>
</html>