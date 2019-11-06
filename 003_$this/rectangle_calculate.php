<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rectangle Calculate </title>
</head>
<body>
    <?php
    require('Rectangle.php');
    //Hình chữ nhật cần tính toán
    $width = 42;
    $height = 7;
    echo "<h2>Hình chữ nhật có chiều rộng $width và chiều cao $height</h2>";

    // tạo đối tượng từ class Rectangle
    $rect = new Rectangle();
    // gán chiều cao cho đối tượng
    $rect->setSize($width, $height);

    echo '<p>Chu vi hình chữ nhật: '.$rect->getPerimeter().'</p>';
    echo '<p>Diện tích hình chữ nhật: '.$rect->getArea().'</p>';

    if($rect->isSquare()){
        echo '<p>Hình chữ nhật này là hình vuông!</p>';
    }else{
        echo '<p>Hình chữ nhật này không phải là hình vuông</p>';
    }
    // xóa đối tượng sau khi sử dụng
    unset($rect);
    ?>

</body>
</html>