<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, World!</title>
</head>
<body>
    <?php
    require('001_HelloWorld.php');
    // tạo đối tượng từ class HelloWorld
    $obj = new HelloWorld();
    // gọi đến phương thức sayHellor
    $obj->sayHello();
    // in ra "Hello, World" bằng các thứ tiếng khác nhau
    $obj->sayHello('VietNamese');
    $obj->sayHello('Chinese');
    $obj->sayHello('French');
    // xóa đối tượng khi không dùng đến
    unset($obj);
    ?>
</body>
</html>