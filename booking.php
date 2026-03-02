<?php
// 1. Defining a function to check room availability
function checkBooking($roomStatus) {
    
    // 2. Using If-Else condition
    if ($roomStatus == "Available") {
        return "Success: Your Homestay room is booked!";
    } else {
        return "Sorry: This room is already occupied.";
    }
}

// 3. Calling the function with a value
$currentStatus = "Available";
echo checkBooking($currentStatus);
?>