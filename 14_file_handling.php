<?php

/*========= FILE HANDLING ========== */
/* 
file handlind is the ability to read and write files on the server
PHP has built in functions for reading and writing files

*/

$file = 'DASH/users.txt';
//   showing different functions of file handling

// check if the file exist 

if(file_exists($file)){
    // echo readfile($file);  ***** the file is very flexible 
    $handle = fopen($file,'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo ($contents);
} else{
    $handle = fopen($file, 'w');
    $contents = 'segun'.PHP_EOL.'sara'.PHP_EOL.'bami'.PHP_EOL.'tosin';
    fwrite($handle,$contents);
    fclose($handle);

}





?>