<?php
$number = 12321;

$numberStr = (string)$number;

$length = strlen($numberStr);

$reversedNumber = "";

for ($i = $length - 1; $i >= 0; $i--) {
    $reversedNumber .= $numberStr[$i];
}

if ($numberStr === $reversedNumber) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
?>
