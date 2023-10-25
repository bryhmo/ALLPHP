<?php
//function are basically a block of code that you can reuse 

// global scope 
$y = 61;

function registerUser(){
    // function scope  
    global $y; // this is used to make a global varieble accesible inside a functio
    echo $y; 
    $x =5;
    echo "hello you are now a registered user <br>";
}
registerUser();


// echo $x; // this will not work bc the variable is out of its function scope 



/* function arguments and parameters  */
function registeredUser($email){ // the $email is the argument 
    echo $email.' you are  registered <br> ';
}
registeredUser('isiaka@gmail.com');/// the isiaka@gmail.com is a parameter 


//sum 
function sum($n1,$n2){
    return $n1 + $n2 ;
}
// sum(5,5);
 $addition = sum(5,5);
 echo $addition.'<br>';


 //setting a default value to a function
 function summation( $first_Number = 43, $second_Number=21){
    return ($first_Number + $second_Number)."<br>";
 }

  $defaultsum = summation();
  echo $defaultsum;

/* arrow function */
$subtract = fn($nom1 ,$nom2) => $nom1- $nom2; 
echo $subtract(10, 3);

/*  anonymous function  */
$multiply = function($num1,$num2){
    return $num1 * $num2;
}


/* ======= SCOPES ===== */
/* 
1. FUNCTION SCOPE 
2. GLOBAL SCOPE 
3. LOCAL SCOPE 


*/

?>