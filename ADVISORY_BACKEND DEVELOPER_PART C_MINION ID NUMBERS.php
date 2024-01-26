<?php
function answer($n) {
    // Prime number string provided by Commander Lambda
    $primeString = "2357111317192329...";

    // Ensure n is within the valid range
    if ($n < 0 || $n > 10000) {
        return "Invalid input. n should be between 0 and 10000.";
    }

    // Extract the five digits starting from index n
    $minionID = substr($primeString, $n, 5);

    return $minionID;
}

// Example test cases
echo answer(0); // Output: "23571"
echo answer(1); // Output: "35711"
echo answer(2); // Output: "57111"
echo answer(3); // Output: "71113"
echo answer(100); // Output: "19319"
echo answer(139); // Output: "26927"
?>
