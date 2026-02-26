<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>
    <form method="post">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        Operation: 
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (*)</option>
            <option value="div">Division (/)</option>
        </select><br><br>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['operation'];
        $result = 0;

        switch ($op) {
            case "add":
                $result = $n1 + $n2;
                break;
            case "sub":
                $result = $n1 - $n2;
                break;
            case "mul":
                $result = $n1 * $n2;
                break;
            case "div":
                if ($n2 != 0) {
                    $result = $n1 / $n2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>