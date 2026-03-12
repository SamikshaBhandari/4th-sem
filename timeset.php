<?php
date_default_timezone_set("Asia/Kathmandu");

$hour = date("H");

if ($hour < 12) {
    echo "Good Morning! Current hour is: " . $hour;
} elseif ($hour < 18) {
    echo "Good Afternoon! Current hour is: " . $hour;
} else {
    echo "Good Evening! Current hour is: " . $hour;
}
?>