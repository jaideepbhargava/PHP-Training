<?php
// Exercise (a)
// Part 1: add the name and age variables.
$name = "Jake";
$age = 20;
echo "Hello $name. You are $age years old.\n";

// Part 2: sum up the variables x and y and
// put the result in the sum variable.
$x = 195793;
$y = 256836;
$sum = $x + $y;

echo "The sum of $x and $y is $sum.";

// Exercise (b)


// TODO: add the even_numbers array here
$even_numbers = [2, 4, 6, 8, 10];

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

// TODO: join the male and female names to one array
$names = array_merge($male_names, $female_names);

print_r($even_numbers);
print_r($names);

// Exercise (c)

$phone_numbers = [
    "Alex" => "415-235-8573",
    "Jessica" => "415-492-4856",
    "Eric" => "415-874-7659",
];

print_r($phone_numbers);

// Exercise (d)


$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    $sum = 0;

    foreach ($numbers as $values) {
        $sum += $values;
    }

    echo "{$sum}\n";
}

// Exercise (e)


$numbers = "38,42,58,48,33,59,87,17,20,8,98,14,62,66,14,62,97,66,74,78,66,2,79,29,72,6,3,71,46,68,48,4,12,52,66,48,14,39,63,69,81,61,21,77,10,44,39,82,19,77,100,98,53,95,30,17,30,96,68,47,81,52,82,11,13,83,10,14,49,96,27,73,42,76,71,15,81,36,77,38,17,2,29,100,26,86,22,18,38,64,82,51,39,7,88,53,82,30,98,86";

// TODO: split the $numbers variable to an array
$number_list = explode(",", $numbers);
// called $number_list

print_r($number_list);

// Exercise (f)

$even_numbers = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
foreach ($even_numbers as $items) {
    echo $items . "\n";
}

// Exercise (g)

$numbers = [56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97];

// TODO: Print odd numbers only
$i = 0;
while ($i < count($numbers)) {
    if ($numbers[$i] % 2 == 1) {
        echo $numbers[$i] . "\n";
        $i++;
    } else {
        $i++;
        continue;
    }

}

// Exercise (h)

// Write the function squared_sum here
function squared_sum($input)
{
    $output = 0;
    foreach ($input as $values) {
        $output += $values * $values;
    }
    return $output;
}

echo squared_sum([56, 65, 26, 86, 66, 34, 78, 74, 67, 18, 34, 73, 45, 67, 75, 10, 60, 80, 74, 16, 86, 34, 12, 23, 42, 72, 36, 3, 73, 9, 92, 81, 94, 54, 97, 74, 45, 55, 70, 94, 96, 81, 86, 86, 84, 4, 32, 8, 96, 86, 87, 18, 84, 87, 59, 48, 32, 90, 17, 22, 82, 79, 66, 28, 17, 14, 80, 83, 66, 36, 21, 89, 68, 2, 51, 65, 20, 87, 48, 5, 1, 16, 60, 53, 84, 90, 16, 2, 37, 73, 57, 70, 57, 69, 68, 1, 24, 40, 72, 97]);

// Exercise (i)


// TODO: Implement the Car class here
class Car
{
    public function __construct($name, $year)
    {
        $this->name = $name;
        $this->year = $year;
    }

    public function print_details()
    {
        echo "\nThis car is a " . $this->year . " " . $this->name . ".\n";
    }
}

$car = new Car("Toyota", 2006);
$car->print_details();

// Exercise (j)


# This function will throw an exception!
function throw_exception()
{
    throw new Exception("Exception!");
}

# Surround the statement in a try-catch-finally block!
try {
    throw_exception();
} catch (Exception $e) {
    echo "Exception caught!\n";
} finally {
    echo "Done!";
}


