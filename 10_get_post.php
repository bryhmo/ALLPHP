<?php

/* by default the form data is on GET method so we dont need to declare a Get method if we want to use a get method  */
/* 
echo $_GET['name'];
echo $_GET['age'];
echo $_GET['email'];
echo $_GET['password'];

*/
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
    echo $_POST['email'];
    echo $_POST['password'];
}




?>

<a href="<?php echo $_SERVER['PHP_SELF'];  ?> ?name=lincoln&age=40">click</a>

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