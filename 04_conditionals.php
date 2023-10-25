<?php
// conditionals are control structure 
//before we go into the control structure lets for look at the operators in php

/* ==== OPERATORS ======*/

/* 
< less than 
> greater than 
<= less than or equal to
>= greater than or equal to 
= equal to 
=== equivalent to or identical to
!= not equal to 
!== not equivalent to 
*/


/* ==== IF STATEMENT  */
/* 
IF STATEMENT SYNTAX

if (conditon){
    ///code to be execute if the condition is true
}
*/

$age = 17;

if($age >= 18){
    echo "you are old enough to vote";
}
if($age <= 18){
    echo "you are not old enough to vote, go and sit down";
}

// using the date value 
$greeting = date("H");
if($greeting < 12 ){
    echo "good morning ";
}
elseif($greeting <= 17){
    echo "good afternoon";
}
else{
    echo " good evenning  ";
}

//something else 
if(true){
    echo "alhamdilillah";
}

//checking for if a variable is  empty
$posts = ['Posts One'];

if(empty($posts)){
    echo " i am empty bro .. i no get anything ..sapa dey oo ";
}
else {
    echo " i am not empty bro  ";
}


//checking for if a variable is not empty
$posts_no= ['Posts One','post two','post three','post 4'];

if(!empty($posts)){
    echo $posts_no[1];
}
else {
    echo "sorry there is no post";
}



//tenary operators 
$posting =[];  
$check_post = !empty($posting)? $posting[0]:"  sorry there is no post available yet";
echo $check_post;

//using the null value for the tenary operator 
$posting1 =['home','products','in-stocks ','about us','contact us'];  
$check_post1 = !empty($posting1)? $posting1[0]:null;
echo $check_post;


/* ======= SWITCH STATEMENT ======= */
//instead of having plenty esleif statement it is of good practice to use the switch statement 

$favorite_color = 'white';

switch($favorite_color){
    case 'red':
        echo "your favorite color is red ";
        break;
    case 'green':
        echo "your favorite color is green ";
        break;
    case 'blue':
        echo "your favorite color is blue ";
        break;
    case 'black':
        echo "your favorite color is black ";
        break;
    case 'white':
        echo "your favorite color is white";
        break;
    default:
        echo "sorry we cant find your favorite color ";

}

?>