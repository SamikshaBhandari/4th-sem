<!DOCTYPE html>
<html>
<body>

    <h2>Even or Odd Checker</h2>
    <form method="post">
        Enter a Number: <input type="number" name="num" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['num'];

        if ($number % 2 == 0) {
            echo "<h3>$number is an Even Number.</h3>";
        } else {
            echo "<h3>$number is an Odd Number.</h3>";
        }
    }
    ?>

</body>
</html>