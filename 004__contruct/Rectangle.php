<?php
/*Định nghĩa class Rectangle
Các thuộc tính của class: width(chiều rộng), height(chiều cao)
Các phương thức của lớp
setSize()
getArea()
getPerimeter()
isSquare()
*/
class Rectangle{
    //Khai báo các thuộc tính
    public $width = 0;
    public $height = 0;
    //Hàm khởi tạo
    /*
     *Phương thức này không trả về giá trị, do đó không sd câu lệnh return
     * Phương thức khởi tạo thực hiện các công việc cần thiết để khởi tạo đối tượng như
     * kết nối csdl, thiết lập cookie hoặc khởi tạo giá trị ban đầu*/
    function __construct($w = 0, $h = 0){
        $this->width = $w;
        $this->height = $h;
    }
    //Phương thức này thiết lập với các kích thước hình chữ nhật
    /*function setSize($w = 0, $h = 0){
        $this->width = $w;
        $this->height = $h;
    }*/
    // Phương thức tính diện tích hình chữ nhật
    function getArea(){
        return ($this->width * $this->height);
    }
    //Phương thức tính chu vi hình chữ nhật
    function getPerimeter(){
        return (($this->width + $this->height) * 2);
    }
    //Phương thức này kiểm tra xem hình chữ nhật này có phải là hình vuông
    function isSquare(){
        if($this->width == $this->height){
            return true;// không phải hình chữ nhật
        }else{
            return false;// hình chữ nhật
        }
    }
}