<?php
// 1. Define a function to check exam results
function checkResult($marks) {
    
    // 2. Using an If-Else condition to decide the outcome
    if ($marks >= 40) {
        return "Congratulations! You passed the exam.";
    } else {
        return "Sorry, you need to score at least 40 to pass.";
    }
}

// 3. Set a sample marks value
$myMarks = 75;

// 4. Call the function and print the result
echo checkResult($myMarks);
?>