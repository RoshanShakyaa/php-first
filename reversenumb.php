<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse</title>
</head>
<body>
<?php

$num = 489;
$rev = 0;

while ($num != 0) {
    $rem = $num % 10;
    $rev = $rev * 10 + $rem;
    $num = (int)($num / 10);
}

echo $rev;

?>
</body>
</html>


