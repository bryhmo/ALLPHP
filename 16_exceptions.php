<?php
/* 
PHP has an exception model similar to that of other programming languages. 
an exception can be thrown ,and caught("catched") within PHP . code may be surrounded in a try block, to facilitate the catching of potential
exceptions. Each try must have at least one corresponding catch or finally block
*/

function inverse($x) {
    if(!$x) {
        throw new Exception('  division by zero  ');
    }
    return 1/$x;
}

// echo inverse(10);
// echo inverse(0);

/* using the try and catch method to error handling */
try{
    echo inverse(5).'<br>';
    echo inverse(0);
}catch(Exception $e){
    echo 'caught exception  ', $e->getMessage(), ''.'<br>';
}finally { //the finally is executed regardless of whether an exception is thrown or not 
    echo 'first finally'.'<br>';
}



try{
    echo inverse(0);
}catch(Exception $e){
    echo 'caught exception', $e->getMessage(), ''.'<br>';
}finally {
    echo 'second finally';
}
?>