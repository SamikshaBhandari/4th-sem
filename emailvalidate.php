<?php
$userEmail = "samiksha@example.com";
if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    echo "Success: The email address is valid.";
} else {
    echo "Error: Invalid email format. Please try again.";
}
?>