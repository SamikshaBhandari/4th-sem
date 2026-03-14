<?php
$users = ["Admin", "Samiksha", "Guest", "Editor"];
$searchName = "Samiksha";
if (in_array($searchName, $users)) {
    echo "Success: " . $searchName . " is in the list!";
} else {
    echo "Error: User not found.";
}
?>