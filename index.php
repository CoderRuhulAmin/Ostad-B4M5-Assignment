<?php

// 2. Find the largest number using PHP (30)
// Write a PHP script to find the largest number among three given numbers: $num1 = 4, $num2 = 5, and $num3 = 6. 
// Use if-else statements.

// Solution:

$num1 = 4;
$num2 = 5; 
$num3 = 6;

if($num1 >= $num2 && $num1 >= $num3){
    echo "The largest number: {$num1}";
}else if($num2 >= $num1 && $num2 >= $num3){
    echo "The largest number: {$num2}";
} else {
    echo "The largest number: {$num3}";
}
echo "\n";
echo "\n";
echo "\n";

// 3. Celsius to Fahrenheit Conversion (30)

// Write a PHP script to convert a temperature of 32 degrees Celsius to Fahrenheit. 
// Store just the temperature value in a variable, no need to store the unit(Celsius). 

// Print the result using the printf function to show up to 2 decimal points.

// Solution:

$celsius = 32;
$fahrenheit = ($celsius * 9/5) + 32;

printf("The temperature in fahrenheit is %.2f F", $fahrenheit);


echo "\n";