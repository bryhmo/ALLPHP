<?php

// working with an array datatype 
//two ways to create an array 
// 1.
$numbers =[1,2,3,4,5,6,7,8,9];
$my_numners=array(1,2,3,4,5,6,7,8,9);
$my_info = var_dump($numbers);
echo $my_info;

$fruits = array('apple','orange','pear','mangoe');
var_dump($fruits);
echo($fruits[1]);
echo($fruits[0]);
echo($fruits[2]);
echo($fruits[3]);

//ASSOCIATIVE ARRAYS
$colors=[
    1 => 'red',
    4 => 'papawhip',
    14 => 'seagreen',
    5 => 'yellow',
];
echo $colors[14]; 


$hex = [
    'red'=> '#f00',
    'green'=> '#0f0',
    'blue'=> '#00f',
];


//an associative array is most used when you are working with databases
//for 
$person = [
    'first_name' => 'ibrahim',
    'last_name' => 'isiaka',
    'email' => 'isiakibrahim@gmail.com',
];
echo($person['first_name']);


//associative arrays is just like javascript object and the python dictionary



//MULTIDIMENTIONAL ARRAY ::::: array inside an array
$class_list =[
    [
        'first_name' => 'ibrahim',
        'last_name' => 'isiaka',
        'email' => 'isiakibrahim@gmail.com'
    ],
    [
        'first_name' => 'lincoln',
        'last_name' => 'abdul',
        'email' => 'lincoln@gmail.com'
    ],
    [
        'first_name' => 'john',
        'last_name' => 'doe',
        'email' => 'johnd@gmail.com'
    ],

];

//to get the some value using the key
echo $class_list[1]['email'];
echo $class_list[2]['first_name'];
echo $class_list[0]['email'];
echo $class_list[0]['last_name'];

var_dump(json_encode($class_list));






//simple array 


?>