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

//using the spread operator to merge an array together
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);


// array_combine()
//the array_combine() creates an array by using one array for its key and the other array for its value

$a = ['green','red','yellow'];
$b = ['avacado','apple','banana'];
$c = array_combine($a,$b);
print_r($c);


//array_keys
$arrkeys = array_keys($c);
print_r($arrkeys);

//array_flip ..... exchnage all the keys with there associated values in an array
$arrflip = array_flip($c);
print_r($arrflip);

//range
$range_of_number = range(1,20);
print_r($range_of_number);

//array_map

$newNumber = array_map(function($number){
    return "Number $number";
},$range_of_number);
print_r($newNumber);

// array_filter()
$lessthan10 = array_filter(
    $range_of_number,
    fn($filter_number)
    =>$filter_number <= 10); 
print_r($lessthan10);

//array_reduce....... the array reduce add all the numbers in the array together
$sum_of_array_items = array_reduce(
    $range_of_number,
    fn($carry,$my_sum_total) 
    =>
    $carry + $my_sum_total);
var_dump($sum_of_array_items);


?>