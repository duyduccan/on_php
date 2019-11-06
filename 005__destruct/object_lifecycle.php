<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Object lifecycle</title>
</head>
<body>
    <?php
    class Demo{
        // Hàm khởi tạo
        function __construct(){
            echo '<li>Khởi tạo các thiết lập cho đối tượng</li>';
        }
        // Hàm hủy
        // dc gọi đến khi đối tượng bị hủy bỏ
        function __destruct(){
            echo '<li>Hủy bỏ đối tượng </li>';
        }
        function doSomeThing(){
            echo '<li>Đối tượng đang sống</li>';
        }
    }// End of Demo class

    echo '<ol>';
    // Tạo đối tượng
    echo '<li>Tạo đối tượng mới</li>';
    $demo = new Demo();

    // Thực hiện doSomeThing
    $demo->doSomeThing();
    // xóa đối tượng
    echo '<li>Chuẩn bị xóa đối tượng</li>';
    unset($demo);
    echo '<li>Ứng dụng kết thúc.</li>';
    ?>

</body>
</html>