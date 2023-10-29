<?php


// echo 'hello world im the real php guy <br>';
// echo 'lincoln is trying for you bro';

/* ==== Object oriented programming ======= */

/* 

From PHP5 onwards you can write php in either a procedural or object oriented way.
OOP consists of classes that can hold  "properties" and "methods".
object can be created from classes

*/

class User{
    /* === ACCESS MODIFIER ======
    1. PUBLIC  
    2. PRIVATE  
    3 .PROTECTED  

    1. public  -----  public  can be access from anywhere 
    2. private -----  private  can only be accessed from inside the class
    3. protected   ------ protected   can only be accessed from inside the class and by inheriting the classes 
    
    */
    //properties are attributes that belong to a class 
    public  $name;
    public  $email;
    public  $password;


    // A constructor is a method that runs when an object is created 
    public function __construct($name,$email,$password) {
       $this->name = $name;
       $this->email = $email;
       $this->password = $password;
    }

//function is a method that belong to a class
    function set_name($firstName){
        $this->name = $firstName;
    }


    function get_name($lastName){
        $this->name = $lastName;
    }
}

//instantiate a user object

$user1 = new User('ibrahim','ibrahim@gmail.com', 'bababattt');
$user2 = new User('abdul','abdul@gmail.com','abduuula');
// $user3 = new User();

echo $user1->name.'<br>';
echo $user2->email.'<br>';

/* 
$user_one = new User();
$user_one->set_name('lasisi');
var_dump($user_one);

$user_two = new User();
$user_two->set_name('mariam');
var_dump($user_two);

$user1 = new User();
$user1->name = 'lincoln';
$user1->email = 'lincoln@gmail.com';
var_dump($user1) ;
*/



/* ====== INHERITANCE ===== */
// inheritance is using the extends keyword 
class Employee extends User{
    public $title;

    public function __construct($name, $email,$password,$title){
        parent::__construct($name, $email,$password);
        $this->title = $title;

    }
    public function get_title(){
        return $this->title;
    }
         
}

$Employee1 = new Employee('segun','segun@gmail.com','asdflkj','Director');
echo $Employee1->title;

?>