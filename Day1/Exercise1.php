<?php
$input = [2,3,[4,5],[6,7],8];
$output = [];
foreach($input as $values){
    if(is_array($values) == true){
        foreach ($values as $nestedValues){
            array_push($output,$nestedValues);
        }
    } else{
        array_push($output,$values);
    }
}
print_r ($output);


