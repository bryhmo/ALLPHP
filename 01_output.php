<?php
// echo();
// print();
// print_r();
// var_dump();
//var_export();


//comments 
//this is a single line comment 
#this is another single line comment 
/* this is a multiline 
comment that span multiple lines  
*/


//echo - output strings ,numbers ,html,etc
echo ("123 hello 10.5");
echo 123, "hello world what is going on ", 40.3;
echo("this is the the department of computer science 123");

//print - works like echo but it can only take in a single argument 
print (123);


// print_r() - use in the printing of single values and arrays 
print_r([1,3,3,4,5]);




// var_dump() - Returns more infomation about what it print out  like the data type and length

var_dump('hello');
var_dump(true);
var_dump(66);
var_dump([1,2,4,5]);


// var_export()- similar to var_dump(), output a string representation of a variable
var_export('hello');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codewithbryhmo</title>
</head>
<body>
    <h><?php echo 'POST ONE '?></h1>
</body>
</html>
