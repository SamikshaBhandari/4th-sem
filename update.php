<?php
include 'connect.php';

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$username = isset($_POST['username']);
$password = isset($_POST['password']);
$confirm = isset($_POST['confirm']);
$email =isset($_POST['email']);

if ($password !== $confirm) {
    echo "Password and Confirm Password do not match.";
} else {
    $sql = "UPDATE users SET username='$username', password='$password', email='$email' WHERE id=$id";
    if (mysqli_query($conn, $sql,$id)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>