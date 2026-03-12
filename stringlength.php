<?php
$message = "BCA Student";
$length = strlen($message);
if ($length < 5) {
    echo "The message is too short.";
} else {
    echo "The message length is: " . $length;
}
?>