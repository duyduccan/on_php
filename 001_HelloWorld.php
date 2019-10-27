<?php
class HelloWorld{
    // phương thức đưa ra lời chào mặc định là tiếng anh
    function sayHello($language = 'English'){
        echo '<p>';
        // tùy thuộc vào ngôn ngữ sẽ in ra lời chào bằng ngôn ngữ khác nhau
        switch($language){
            case 'French':
                echo 'Bonjour, monde!';
                break;
            case 'German':
                echo 'Hallo, Welt!';
                break;
            case 'VietNamese':
                echo 'Xin chào, Các bạn trên toàn cầu!';
                break;
            case 'Chinese':
                echo '你好，世界!';
                break;
            case 'English':
            default:
                echo 'Hello, world!';
                break;
        }
        echo '</p>';
    }
}
/*tạo đối tượng từ class $object = new ClassName();
thực thi phương thức trong class $object->methodName();
 trong đó -> toán tử đối tượng, sd để truy xuất thuộc tính hoặc đối tượng
$object->methodName('value', 32, true); có thể truyền tham số
$object->propertyName; truy xuất thuộc tính đối tượng*/