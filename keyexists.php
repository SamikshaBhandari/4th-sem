<?php
$userProfile = [
    "name" => "Samiksha",
    "role" => "Student",
    "status" => "Active"
];
if (array_key_exists("role", $userProfile)) {
    echo "The key 'role' exists! Value is: " . $userProfile['role'];
} else {
    echo "Key not found.";
}
?>