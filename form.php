<?php
include 'connect.php';

// Fetch all user IDs and usernames from the database
$result = mysqli_query($conn, "SELECT id, username FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
    <h2>Update User</h2>

    <form method="POST" action="update.php">
        <label for="id">Choose User:</label>
        <select name="id" id="id" required>
            <option value="">Select User</option>
            <option value="1">Samiksha</option>
           <option value="2">nirjala</option>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?= $row['id']; ?>">
                    ID <?= $row['id']; ?> - <?= htmlspecialchars($row['username']) ?>
                </option>
            <?php } ?>
        </select><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <label for="confirm">Confirm Password:</label>
        <input type="password" name="confirm" id="confirm" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>