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
