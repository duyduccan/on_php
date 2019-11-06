<?php
/**
 * trong php khi khai báo biến thì chỉ cần khai báo tên biến và giá trị của nó còn kiểu dữ liệu thì php tự nhận diện dc
 * trong php có 7 kiểu dữ liệu sau
 * int
 * kiểu số thực(float, double, real)
 * kiểu boolean
 * chuỗi
 * mảng
 * null
 * đối tượng
 */
// kiểu int(số nguyên)
$a = 123;
// kiểu số thực float, double
$float = 5.8;
// kiểu boolean tồn tại true và false
$b = true;
/* kiểu chuỗi tồn tại string, char
dùng hàm is_string($string); nếu là true là đúng, false là sai
*/
$string = 'toidicode.com';
$string = "toidicode.com";
/*kiểu null
đây là kiểu dữ liệu rỗng, khi khai báo kiểu biến này bộ nhớ sẽ tiếp nhận tên biến mà không tốn thêm bất kỳ một ô nhớ nào
*/
$a = null;
/*kiểu object  hướng đối tượng*/
/*
 * ép kiểu
 * $bien_moi = (kieudulieu)$bien;
 * $bien_moi: là biến mới chứa dữ liệu sau khi đã ép
 * kieudulieu: là một trong các kiểu dữ liệu nêu ở trên
 * $bien: là biến mà bạn muốn ép kiểu(có thể có dữ liệu sẵn)
 * */
$a = 9;// khai báo biến kiểu int
$b = (string)$a;// ép kiểu sang string
var_dump($b);// để kiểm tra dữ liệu đang ở kiểu nào

