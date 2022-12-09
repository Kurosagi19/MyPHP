<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
    $a;
    $_a;
    $haNoi;

    echo "<h1>Hello PHP</h1>";

    // Khai báo kèm khởi tạo
    $num = 1; // Khai báo biến $num và khởi tạo giá trị là 1
    $hoTen = "Nguyen Van A";

    // Khai báo không khởi tạo
    $num1; // Khai báo một biến có tên là $num1
    $num1 = 2; //khai báo giá trị cho $num1 là 2


    // tên không được bắt đầu bởi số
    // tên biến không bao gồm các kí tự đặc biệt trừ $ và _
    // printf()
    // cout << stdout
    // cin >> stdin
    // System.out.printf()
    // document.write();
    
    //Biến tham chiếu
    $foo = 'bob';
    echo $foo;
    echo "<br>";
    $bar = &$foo;
    $bar = "My bar";
    echo "<br>-----</br>";
    echo $bar;
    echo "<br>";
    echo $foo;
    echo "<br>";
    
    // $x = 10;
    // function test() {
    //     global $x;
    //     $y = 20;
    //     echo "x = " . $x . "<br>";
    //     echo "y = " . $y . "<br>";
    // }
    // test();
    // echo "<br>.......................................<br>";
    // echo "x = " . $x . "<br>";
    // echo "y = " . $y . "<br>";


    // while(false) {
    //     echo "while-loop <br>";
    // }

    // do {
    //     echo "do-while-loop <br>";
    // } while (false);

    // for($i = 1;$i < 5; $i++) {
    //     echo $i . "-";
    //     if ($i == 3) {
    //         continue;
    //     }
    // }

    // echo "<br>";

    // $tongChan = 0;
    // $tongLe = 0;
    // for ($i = 1; $i <= 50; $i++) {
    //     if($i % 2 == 0) {
    //         $tongChan += $i;
    //     } else {
    //         $tongLe -= $i;
    //     }
    // }
    // echo "Tong chan = " .$tongChan. "<br>";
    // echo "Tong le = " .$tongLe. "<br>";

?>



</body>
</html>