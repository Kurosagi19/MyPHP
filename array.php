<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
     // Khai báo mảng
     $fruits = array();
     $fruits[] = "banana"; // 0 => banana
     $fruits["orange"] = "Orange"; // orange => Orange
 
     $fruits = array(
         1, // 0
         "orange" => "Orange", // orange
         "size" => [
             "S",
             "M",
             "L",
         ]
         );
 
     $fruits = [
         "banana", // 0
         "orange" => "Orange", // orange
     ];
     $fruits = [
         "banana", // 0
         "orange" => "Orange", // orange
     ];
 
     foreach($fruits as $key => $value) {
         echo $key ."-". $value ."<br>";
     };
 
     // Khai báo một mảng có tên các phần tử là tên các môn học:
     // PHP, JavaScript, Java, HTML, CSS, C#
     // có các key môn học tương ứng (viết thường). In mảng ra ngoài màn hình.
     $subjects = [
         "php" => [
             "Laravel",
             "Wordpress",
             "Magento",
         ],
         "js" => "JavaScript",
         "java" => "Java",
         "html" => "HTML",
         "css" => "CSS",
         "cs" => "C#",
     ];
 
    //  $subjects = array (
    //      "php" => "PHP",
    //      "js" => "JavaScript",
    //      "java" => "Java",
    //      "html" => "HTML",
    //      "css" => "CSS",
    //      "cs" => "C#",
    //  );
 
     // In các phần tử của mảng $subjects
     foreach($subjects as $key => $value) {
         echo $key ." - ". $value ."<br>";
     };
 
     // In các phần tử trong phẩn tử "php" của mảng $subjects
     foreach($subjects['php'] as $key => $value) {
         echo $key ." - ". $value ."<br>";
     };
    ?>
</body>
</html>