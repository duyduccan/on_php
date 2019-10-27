<?php
/*
 * object là một ngôi nhà cụ thể
 * class(danh từ) là một bản thiết kế ngôi nhà đó
 * oop gồm 4 tính chất
 * tính kế thừa
 * tính trừu tượng
 * tính đóng gói
 * tính đa hình
 * oop chỉ đơn giản là cách tư duy khác để giải quyết vấn đề mà trong đó chúng ta tập trung
 * vào các đối tượng thay vì tập trung vào hành động
 * */
class ClassName{
    // nội dung của lớp
    /* có thể chứa biến(variable) trong class gọi là thuộc tính(property),
    hàm(function) được gọi là phương thức (method)
    */
    public $var1, $var2;
    function functionName(){
        // code của phương thức
    }
}
class GoodClass{
    public $var1 = 123;
    public $var2 = 'string';
    public $var3 = array(1, 2, 3);
}
class BadClass{
    //Khai báo thuộc tính với kết quả của biểu thức là lỗi ngay
    //public $today = get_date();
    //public $square =$num * $num; // không dc viết code ngoài phương thức
}
