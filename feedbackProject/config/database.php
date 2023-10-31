<?php
/* connection to database */

define('DB_HOST','localhost');
define('DB_USER','bryhmo');
define('DB_PASS','bryhmo5*@4110/Block');
define('DB_NAME','php_dev');


//create connection
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//Check Connection
if($conn->connect_error) {
    die('Connection Failed'.$conn->connect_error);
}
echo 'Connected!';// check if its connected by include this file in the header file
?>