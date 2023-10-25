<?php
//loops are use to execute a piece of code as long as the condition is meet


/* ===== FOR LOOP */

/* 
** for loop syntax

        for (initialize; condition; increment){
            //code to execute
        }

*/

for($x=0; $x<=10;$x++){
    echo $x.'<br>';
}

for($y=3;$y<=16;$y++){
    echo 'Number '.$y.'<br>';
}

for($lincoln =3; $lincoln<18;$lincoln++){
    echo 'lincoln '.$lincoln.'<br>';
}


/* ===== WHILE LOOP ==== */

/* 
** while loop syntax
        while(condition){
            //code to be executed 
            increment
        }

*/
 $while_loop = 1;

 while($while_loop <= 16){
    echo 'while loop '.$while_loop.'<br>';
    $while_loop++;
 }

 /* ====== DO WHILE LOOP  */

 /* 
 **do while loop syntax

        do {
            //code to be executed 
        }while (condition);
 

 the do while loop will always execute the block of code once,
 even if the condition is false 
 */

 $counter = 3;
 do{
    echo 'do while number '.$counter.'<br>';
    $counter ++;
 }while($counter<=15);


 $countme =17;
 do{
    echo 'do while number '.$countme.'<br>';
    $countme++;
 }while($countme<=15);


/* ===== FOR EACH LOOP =====  */
/* 
** foreach syntax 

    forech ($array as $value ){
        //code to be executed 
    }


in the real PHP development we used this foreach array than any other array
we will be using the foreach loop when we are dealing with database and files 
*/

$postspost = ['first position','second position ','third position','four position','fifth position'];

//using for to loop through
for($x = 0; $x<count($postspost);$x++){
    echo 'position : '.$postspost[$x].'<br>';
}


//using the foreach loop to execute thesame array
foreach($postspost as $value){
    echo 'pos :'.$value.'<br>';
}

foreach($postspost as $index => $value){
    echo $index .'  -  '.$value.'<br>';
}


//using foreach loop for an associative array

$person =[
    'first_Name ' => 'lincoln ',
    'second_Name' => 'abdullah',
    'email' => 'lincoln@gmail.com'
];
foreach($person as $key => $value){
echo("$key - $value <br>");
}

//foreach for the multidimensional array 
$people = [
        [
        'first_Name ' => 'ayomide',
        'second_Name' => 'gbogboade',
        'email' => 'ayomide@gmail.com',
        ],
        [
        'first_Name ' => ' samuel  ',
        'second_Name' => 'omolade ',
        'email' => 'samuel@gmail.com',
        ],
        [
        'first_Name ' => 'lincoln ',
        'second_Name' => 'abdullah',
        'email' => 'lincoln@gmail.com',
        ],
        [
        'first_Name ' => 'ismail ',
        'second_Name' => 'illyas',
        'email' => 'ismail@gmail.com',
        ],
];

// we use the json_encode when we have the multidimensional array
$my_Array_Result = json_encode($people);
echo($my_Array_Result.'<br>');

