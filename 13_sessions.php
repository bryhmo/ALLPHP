
<?php
/* whennever we use session value in our code we need to have a session start and the function for that is session_start()  and we are going to put the session at the top of our page*/

session_start();


if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    echo $name;

    if($username === 'isiaka' && $password == 'bryhmo'){
        $_SESSION['username'] = $username;
        /* redirect with the PHP folders using the header function */
        header('Location:/ALLPHP/DASH/dashboard.php');
    }
    else{
        echo 'incorrect Login Details';
    }

}
?>
























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form sessions</title>
</head>
<body>
<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?> ?name=lincoln&age=40" >click</a>

<!-- use the method post first to see how it display the names in the url  -->
<!-- the only thing you should use a GET method for is when you want to search for something -->
<form action="<?php  echo $_SERVER['PHP_SELF'];  ?>" method="POST">
<div>
    <label for="name">Name:</label>
    <input type="text" name="username" placeholder="full name ">
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
</body>
</html>
