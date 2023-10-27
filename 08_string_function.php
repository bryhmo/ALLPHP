<?php
//this is the string function that is responsible for the manipulation of thehttps://youtube.com/ array string 
//it is also called a string method 


$string = "hello world";

//get the length of the string 
echo strlen($string)."<br>";

//find the position of the first occurence of a substring in a string
echo strpos($string,'o')."<br>";

//find the position of the last occurence of a substring in a string
echo strrpos($string, 'o')."<br>";

//reverse a string
echo strrev($string)."<br>";

//converte all the character to a lower case
echo strtolower($string)."<br>";

//convert all the character to an upper case letter
echo strtoupper($string)."<br>";

//uppercase the first character of each word
echo ucwords($string)."<br>";

//string replace 
echo str_replace('world','everyone',$string)."<br>";

//return a portion of a string specified by the offset and the length
echo substr($string,0,5)."<br>";
echo substr($string,5)."<br>";

//to check if a certain string start with a something 
str_starts_with($string,'hello')."<br>";
if(str_starts_with($string, 'Hello')){
    echo 'YES'."<br>";
}

//capiterlize the first letter of a string
echo ucfirst($string);


//HTML ENTITIES  for sceurity purpose 

$string2 = '<h1>HELLO WORLD ,ALHAMDULILLAH FOR EVERYTHING</h1>';
echo $string2;

$string3 = ' <script>alert(1)</script> ';//this opens us to an attack if we have a form in our site
// echo $string3;

//in other to avoid the attack from the hackers then we need to use the htmlspecialchars for our form input when accept an input from the front end 
echo htmlspecialchars($string3); // mostly used with forms

//formatted string
printf('%s likes to %s','Bryhmo','code '); // this is good for when you are having an outside data 
printf('1 + 1 = %d',1+1); //decimal
printf('1 + 1 = %f',1+1); //float






?>