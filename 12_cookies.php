<?php
/* cookies are a mechanism for storing data in the remote browser
 and thus tracking or identifying return users.
 you can set specific data to be stored in the browser ,
  and then retrieve it when user visit the site again.
 */

/* cookie syntax */
 setcookie('second_cookie','mamdd',time()+86400*30);

 if(isset($_COOKIE['second_cookie'])){
    echo $_COOKIE['second_cookie'];
 }

 // how to unset a cookie ===== set the time to the past 

 setcookie('mycookie','', time()-86400)


?>