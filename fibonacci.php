<?php
$num = 10; 

$first = 0;
$second = 1;

echo "Fibonacci series up to $num term:\n";
echo "$first $second ";

for ($i = 2; $i < $num; $i++) {
    $next = $first + $second;
    echo "$next ";
    $first = $second;
    $second = $next;
}
?>
