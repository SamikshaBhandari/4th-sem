<?php
function checkBooking($roomStatus) {
    
    if ($roomStatus == "Available") {
        return "Success: Your Homestay room is booked!";
    } else {
        return "Sorry: This room is already occupied.";
    }
}
$currentStatus = "Available";
echo checkBooking($currentStatus);
?>