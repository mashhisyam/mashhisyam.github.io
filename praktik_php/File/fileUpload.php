<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $target_path = "uploads ";

        $target_path = $target_path . basename(
        $_FILES['uploadedfile']['name']);

        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
            echo "The File ". basename($_FILES['uploadedfile']['name'])." has been uploaded";
        }else{
            echo "There was an error uploading the file, please try again!";
        }
    ?>
</body>
</html>