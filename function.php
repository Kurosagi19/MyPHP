<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>

<?php

/*
PHP function
- Cú pháp:
function <function_name> {

}
+ Từ khóa: function.
+ <function_name>: tên hàm. Quy tắc đặt tên hàm giống tên biến, có ý nghĩa với nội dung thực thi.
+ {}: Nội dung thân hàm.
+ Hàm có kiểu trả về hay không có kiểu trả về thì dùng chung một cấu trúc này.
*/

function printText() {
    echo "This is function in PHP.";
}
printText();

function tinhTong($a, $b) {
    return $a + $b;
}
echo "<br>";
echo tinhTong(2, 3);

/* Hàm có tham số mặc định */
function tinhTong1($a, $b, $c = 10) {
    return $a + $b + $c;
}
tinhTong(1, 2);

$a = 1;
function refFunction(&$a) {
    $a++;
    echo "<br> Trong hàm: $a <br>";
}
refFunction($a);
echo "<br> Ngoài hàm $a <br>";

/*
include()
include_once
+ Nếu lỗi sẽ cảnh báo 1 lần và chạy tiếp chương trình.

require()
require_once
+ Nếu lỗi sẽ dừng hẳn chương trình.
*/

?>

</body>
</html>