<?php
/*  the array function is used to manipulate an array  */

$fruits = ['apple','orange','pearl','mango','cashew','bannana'];

//get the lenght of an array 
$number_Of_Fruits = count($fruits);
echo $number_Of_Fruits.'<br>';
var_dump($fruits);

//search array
$Search_array= in_array('mango',$fruits);
var_dump($Search_array);

$Search_array1 = in_array('garri', $fruits);
var_dump($Search_array1);

// ADD TO an ARRAY
$fruits[] ='garden egg';
print_r($fruits);

array_push($fruits,'garri','watermellon');
print_r($fruits);

//ADD TO THE BEGINNING OF AN ARRAY
array_unshift($fruits, 'cocoa');
print_r($fruits);

//REMOVE FROM AN ARRAY 
array_pop($fruits);
array_shift($fruits);
unset($fruits[4]);

print_r($fruits);

// split array into chunks 

$chunkd_array_two = array_chunk($fruits,2);
// echo $chunkd_array;
print_r($chunkd_array_two);

$chunkd_array_three = array_chunk($fruits,3);
// echo $chunkd_array;
print_r($chunkd_array_three);


//merging of an arrays 

$arr1 = [1,2,3,4];
print_r($arr1);
$arr2 = [5,6,7,8];
print_r($arr2);
$arr3 =array_merge($arr1,$arr2);
print_r($arr3);
?>