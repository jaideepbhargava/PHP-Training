<?php
$input = ["snake_case","camel_case","camel_snake_simp","snake"];
$output=[];
foreach($input as $item){
    $flag = false;
    $camelCase = "";
    for($i=0;$i<strlen($item); $i++){
        if($item[$i] == '_'){
            $flag=true;
        }elseif($flag==true){
            $temp = strtoupper($item[$i]);
            $camelCase = $camelCase.$temp;
            $flag = false;
        }else{
            $camelCase = $camelCase.$item[$i];
        }
    }
    array_push($output,$camelCase);
}
print_r($output);