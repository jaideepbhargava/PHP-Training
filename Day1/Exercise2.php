<?php
$input = 9876543210;
$middleware = strval($input);
for($i=2;$i<8;$i++){
    $middleware[$i] = "*";
}
$output = $middleware;

echo $output;



