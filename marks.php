<?php
function checkResult($marks) {
    
    if ($marks >= 40) {
        return "Congratulations! You passed the exam.";
    } else {
        return "Sorry, you need to score at least 40 to pass.";
    }
}

$myMarks = 75;

echo checkResult($myMarks);
?>