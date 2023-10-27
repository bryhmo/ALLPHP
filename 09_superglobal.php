<?php
/*========= Superglobals ========== */

// superglobals are the PHP Built in variables that are always available in all Scopes 

/* 

1. $_GET ---- contains the information about variables passed through a URL or a form

2. $_POST ----contains information about variables passed through a form

3. $_COOKIE ----- contains information about variables passed through a cookie 

4. $_SESSION ----- contains information about variables passed through a sessions 

5. $_SERVER ----- contains information about the server environment

6. $_ENV ---- contains informations about the environment variables 

7. $_FILES ----- contains information about files uploaded to the script

8. $_REQUEST ----- contains information about variables passed through the form or URL
 
*/

var_dump($_SERVER);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>  Host : <?php echo $_SERVER['HTTP_HOST'];?> </li>
        <br />
        <li>  Document Root:::: <?php echo $_SERVER['SERVER_NAME'];?> </li>
        <br />
        <li>  Server Port:::: <?php echo $_SERVER['SERVER_PORT'];?> </li>
        <br />
        <li>  Current File Dir:::: <?php echo $_SERVER['PHP_SELF'];?> </li>
        <br />
        <li>  Request Url:::: <?php echo $_SERVER['REQUEST_URI'];?> </li>
        <br />
        <li>  Server Software:::: <?php echo $_SERVER['SERVER_SOFTWARE'];?> </li>
        <br />
        <li>  Client Info:::: <?php echo $_SERVER['HTTP_USER_AGENT'];?> </li>
        <br />
        <li>  Remote Address:::: <?php echo $_SERVER['REMOTE_ADDR'];?> </li>
        <br />
        <li>  Remote Port:::: <?php echo $_SERVER['REMOTE_PORT'];?> </li>
    </ul>
</body>
</html>