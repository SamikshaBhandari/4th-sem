<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "labwork";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("Connection Failed:" .mysqli_connect_error());
}
else{
    echo "Connected Successfully.";
}
?>