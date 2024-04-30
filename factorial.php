<?php 

$num = 5;

if($num == 0 || $num ==1){
     echo 1;
}
else{
    $result = 1;
    for($i= 2; $i<=$num; $i++)
    {
        $result *= $i;
    }
}

echo "factorial of $num = $result";

?>