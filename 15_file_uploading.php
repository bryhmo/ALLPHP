<?php
/* ==== firstly lets check if the form is submitted ==== */
if(isset($_POST['submit'])){

    $allowed_ext = array('png','jpg','jpeg','gif');

    // lets check if a file is being submitted using the $_FILES superglobal
    if(!empty($_FILES['upload']['name'])){
        //after choosing a file let show the file to see what the file contain of 
        // print_r($_FILES);

        /* from the print_r we have an output of an array with the following 
        name
        full_path
        type
        tmp_name 
        error 
        size
        */
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        
        //set the target directory for the images that are coming in
        $target_dir = "uploads/$file_name";

        //Get file extension
        $file_ext = explode('.',$file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext;


        //check and validate if the file is an image=== validate file ext
        if(in_array($file_ext,$allowed_ext)){
            if($file_size <= 1000000){
                //to upload the file we use a function called move_uploaded_file()
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color:green;"> image uploaded successfully </p>';

            }else{
                $message = '<p style="color:red;"> File is too large </p>';
            }


        }else{
            $message = '<p style="color:red;"> invalid file type  </p>';

        }
    }else{
        $message = '<p style="color:red;"> Please choose a file </p>';
    }

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploading</title>
</head>
<body>
    <?php   echo $message ?? null;     ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" method="POST" enctype="multipart/form-data">
    <label for="file">Select image To upload :</label>
    <br>
    <input type="file" name="upload">
    <br>
    <input type="submit" value="submit" name ="submit">
    </form>
</body>
</html>