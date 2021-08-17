<?php
$json = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";
$updatedJSON = str_replace( array( '\''), ' ', $json);
$phpString = json_decode($updatedJSON);
$names = [];
$age = [];
$city = [];
foreach($phpString->{"players"} as $value){
    array_push($names,$value->{"name"});
    array_push($age,$value->{"age"});
    array_push($city,$value->{"address"}->{"city"});
}

$tempNames=[];
$map = [];
foreach ($names as $item) {
    $map[strtolower($item)] =0;
}
$uniqueNames =[];
foreach ($map as $key => $value){
    array_push($uniqueNames,$key);
}
echo "UNIQUE NAMES\n";
print_r($uniqueNames);

$max_age = max($age);
$oldestNames =[];
for($i=0;$i<count($age);$i++){
    if($age[$i] == $max_age){
        array_push($oldestNames,$names[$i]);
    }
}
echo "Players with Maximum age\n";
print_r($oldestNames);
