<?php

session_start();

if(isset($_SESSION['username'])){
   echo '<h1> Wellcome   ' . $_SESSION['username']. '</h1>';
    echo '<a href="logout.php">Logout</a>';
}
else{
    echo '<h1>Wellcome Guest</h1>';
    echo '<a href="/ALLPHP/13_sessions.php"> VISIT HOME PAGE</a>';
}


?>