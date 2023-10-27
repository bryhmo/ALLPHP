<?php

/* by default the form data is on GET method so we dont need to declare a Get method if we want to use a get method  */
/* 
echo $_GET['name'];
echo $_GET['age'];
echo $_GET['email'];
echo $_GET['password'];

test your input with <script>alert(1)</script>

*/
/* if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo $name;
} */
/* OR WE CAN FILTER OUR DATA WITH THIS METHOD ... this is the best method so far */
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}

//filter var
//the filter var can be used with input or anything or used for the regular validation
/* if(isset($_POST['submit'])){
    $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
} */



?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> ?name=lincoln&age=40">click</a>

<!-- use the method post first to see how it display the names in the url  -->
<!-- the only thing you should use a GET method for is when you want to search for something -->
<form action="<?php  echo $_SERVER['PHP_SELF'];  ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="full name ">
</div>
<div>
    <label for="age">Age:</label>
    <input type="text" name="age" placeholder="age" >
</div>
<div>
    <label for="email">Email:</label>
    <input type="email" name="email"  placeholder="email">
</div>
<div>
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="password" >
</div>

<input type="submit" value="submit" name="submit">

</form>