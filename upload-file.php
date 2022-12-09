<?php
    if(isset($_POST['upload_btn'])) {
        $fileName = $_FILES['image']['name'];
        $source_path = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        // echo $fileName;
        // echo "<br>";
        // echo $tmp_fileName;
        // echo "<br>";
        // echo $fileSize;
        $dest_path = "public/uploads/".$fileName;
        move_uploaded_file($source_path, $dest_path);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit" value="upload" name="upload_btn">
    </form>
</body>
</html>