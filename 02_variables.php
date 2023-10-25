<?php
/* ======PHP DATA TYPES */
/*
-string      series of character surrounded by a quote;; single or double 
-integer     whole numbers 
-Float       Decimal Numbers 
-Boolean     true or false 
-Array       special variables which can hold more than one value 
-objects     A class(under the object oriented programmin ,in which objects are created from a class) 
-NULL        Empty variable
-Resource    special variable that holds a resource   
*/
// echo "im working oooo lol ";

/* ===== VARIABLE RULES ========== */

/*
-variables must be prefix with $
-variable must start with a letter or the underscore
-variable can't start with a number 
-variables can only contain an alpha numeric character and the underscore(a-z,0-9, and _)
-variables are case sensitive ($name and $NAME are two different variables

*/


//string data type 
$name = "this is the lincoln university college <br />";
echo $name ;
$student = "The Student of the Lincoln University College are the best <br />";
echo $student;
$firstName = "Lincoln";
$secondName = "Abdullah";
echo $firstName, " ",$secondName ,"<br />";
echo $firstName.$secondName."<br />";

//integer data type 
$myage = 23;
$myage2 = 28;
$myage3 = 29;
echo "The first age mate is ".$myage."<br />";
echo "my real age is $myage";
var_dump($myage);
print_r($myage);

//boolean data type 
$has_kids = true;
$has_girlfriend = false;
$is_virgin = true;
$has_car  = false;
echo $is_virgin;

//Float data type 
$cash_on_hand = 120.4;
$grade_pass = 4.40;
var_dump($cash_on_hand);

//having variable within strings 

echo '$cash_on_hand is a bigger than $grade_pass';
echo "$cash_on_hand is a bigger than $grade_pass";
echo $cash_on_hand."is extrabigger than ". $grade_pass;


//operators 
$x= '5' + '5';
var_dump($x);
echo 10-5;
echo 5-10;
echo 5*6;
echo 10/2;
echo 10%3;

//constant.... constant are used mostly for database in which our variable is not going to change 
// mostly for database credentials 

define('HOST', 'localhost');
define('DB_NAME','dev_db');

echo HOST;
echo DB_NAME;



?>