<?php
$number = 17; 

if ($number < 2) {
    echo "$number is not a prime number.";
    exit();
}

$isPrime = true;

for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i === 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
