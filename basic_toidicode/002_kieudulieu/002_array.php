<?php
/**
 * mảng là danh sách các phần tử có cùng, hoặc k cùng dữ liệu
 * gồm 2 loại mảng 1 chiều, đa chiều trong mỗi mảng đó lại phần ra
 * mảng tuần tự và mảng bất tuần tự
 *
 */
// cách khai báo trong mảng
// cách 1
$array = array();// mảng rỗng

// cách 2 đối với php >= 5.4
$array = [];// mảng rỗng

// khai báo thêm giá trị của mảng tương ứng với 2 cách trên
$array = array('gia_tri_1','gia_tri_2');
$array = ['gia_tri_1','gia_tri_2'];

// hiển thị mảng bằng print_r() để in ra tất cả phần tử và vị trí của nó trong mảng
// mảng tuần tự
$ten = array('Can', 'Duy', 'Duc');
print_r($ten);//Array ( [0] => Can [1] => Duy [2] => Duc )
echo "<pre>";
print_r($ten);
echo "</pre>";
/*
 * Array
(
    [0] => Can
    [1] => Duy
    [2] => Duc
)*/
// muốn in ra phần tử thì phải dựa vào vị trí phần tử đó
$ten = array('Can', 'Duy', 'Duc');
echo $ten[0];// Can
echo $ten[1];// Duy
echo $ten[2];// Duc
echo "<br>";
/* thêm phần tử vào mảng
$ten_mang['Key'] = 'value';
key: là key của mảng, nếu k điền thì php sẽ tự thêm vào cuối mảng
value: là giá trị phần tử
*/
$arr = array('Can', 'Duy');
$arr[2] = 'Duc';
print_r($arr);
echo '<br>';

// sửa phần tử trong mảng
$arr1 = array('Can', 'Duy');
$arr1[1] = 'Duc';
print_r($arr1);

/* mảng bất tuần tự
Đây là loại mảng có key(khóa) không theo một tuần tự nào có thể là số, có thể là chữ
*/



