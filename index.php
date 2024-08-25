<?php 

if (isset($_POST['sub'])) {
    $dir = "images/";
    $namefile = $_FILES['fileImg']['name'];
    $tmpFile = $_FILES['fileImg']['tmp_name'];
    $typefile = explode(".", $namefile)[1];

    $correct = array("png", "jpg", "gif");
    
    if (in_array($typefile, $correct)) {
        echo "correct type file";
        if (move_uploaded_file($tmpFile, $dir . $namefile)) {
            echo "uploaded";
        }
    }

    else {
        echo "invalid type file";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileImg" id="">
        <input type="submit" name="sub" value="upload">
    </form>
    
</body>
</html>