<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
</body>

</html>

========================================================

<?php

if(isset($_POST["submit"])){
    $file = $_FILES['file'];
    //print_r($file);

    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileTmpName = $_FILES['file']['tmp_name'];

    $fileExt = explode('.' , $fileName);
   // echo "<br><br>";
    //print_r($fileExt);

    $fileActualExt = strtolower(end($fileExt));
    //echo "<br><br>";
    //print_r($fileActualExt);

    $fileTypeAllowed = array('jpg','png','jpeg','gif','pdf');


    if (in_array($fileActualExt,$fileTypeAllowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                //$fileNameNew =uniqid('', true).".".$fileActualExt;
                $fileNameNew =$fileName;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                echo "File Uploaded Successfully ". $fileNameNew;
            }
            else {
                echo "Your file size is TOO big ";
            }

        }else{
            echo "There is an error in uploading your file!!!";
        }

    }
    else{
        echo "You can't upload the file of this type";
    }
}
?>