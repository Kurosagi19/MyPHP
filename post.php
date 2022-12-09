<?php
if(isset($_POST['submit_btn'])) {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
if (empty($_POST['username'])) {
    $error['username'] = "Tên đăng nhập không được để trống";
} else {
    echo $_POST['username'];
}
echo "<br>";
if (empty($_POST['password'])) {
    $error['password'] = "Mật khẩu không được để trống";
} else {
    echo $_POST['password'];
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <form action="process.php" method="post">
        Username:
        <input type="text" name="username" id="">
        <span>
            <?php
            if(isset ($error['username'])) {
                echo $error['username'];
            }
            ?>
            </span>
        <br>
        Password:
        <input type="text" name="password" id="">
        <span>
            <?php
            if(isset ($error['password'])) {
                echo $error['password'];
            }
            ?>
            </span>
        <br>
        <input type="submit" value="Submit" name="submit_btn">
    </form>
</body>
</html>