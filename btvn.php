<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Hello</h1>

<?php

$chuoi = "xin chao Viet Nam";
echo $chuoi . "<br />";

// 1 
echo "Số ký tự trong chuỗi là: " . strlen($chuoi);
echo "<br>";

// 2
$so_tu = str_word_count($chuoi);
echo "Số từ trong chuỗi là: " . $so_tu;
echo "<br>";

// 3 
$chuoi_dao_nguoc = strrev($chuoi);
echo "Chuỗi đảo ngược là: " . $chuoi_dao_nguoc;
echo "<br>";

// 4 Tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
$chuoichinh = "Chào mừng bạn đến với Hàn Quốc !";
$chuoicon = "Hàn Quốc";
$vitri = strpos($chuoichinh, $chuoicon);
echo "Chuỗi con được tìm thấy tại vị trí: " . $vitri;
echo "<br>";

// 5 Thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
$chuoi_chinh = "Chào mừng bạn đến với Trung Quốc !";
$chuoi_con_can_thay_the = "Trung Quốc";
$chuoi_thay_the = "Việt Nam";
$chuoi_moi = str_replace($chuoi_con_can_thay_the, $chuoi_thay_the, $chuoi_chinh);
echo "Chuỗi sau khi thay thế là: " . $chuoi_moi;
echo "<br>";

//6 kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
$strr = "Hello";
$strrr = "Hello John!";

# Lấy độ dài của chuỗi con
$length = strlen($strr);

# Lấy phần đầu của chuỗi lớn có cùng độ dài với chuỗi con
$startOfStrrr = substr($strrr, 0, $length);

# So sánh phần đầu của chuỗi lớn với chuỗi con
if ($startOfStrrr === $strr) {
    echo "Chuỗi '$strrr' bắt đầu bằng '$strr'.<br>";
} else {
    echo "Chuỗi '$strrr' không bắt đầu bằng '$strr'.<br>";
}


$string = "good bye";
// 7 
echo "Chuỗi sau khi chuyển đổi thành chữ hoa: " . strtoupper($string);
echo "<br>";

// 9 chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo "Chuỗi sau khi chuyển đổi: " . ucwords($string);
echo "<br>";

// 8 chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
$stringg = "GOOD BYE";
$lowercaseString = strtolower($stringg);
echo "Chuỗi sau khi chuyển đổi thành chữ thường: " . $lowercaseString;
echo "<br>";

// 10 loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
$String = "   Wellcome to Viet Nam   ";
echo "Chuỗi sau khi loại bỏ khoảng trắng: " . trim($String) . "<br>";

// 11 loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
$str1 = "123peanut";
echo "Chuỗi sau khi loại bỏ ký tự đầu tiên: " . ltrim($str1, "123") . "<br>";

// 12 loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
$str2 = "peanut--------";
echo "Chuỗi sau khi loại bỏ ký tự cuối cùng: " . rtrim($str2, "-") . "<br>";

// 13 Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$chuoi1 = "Chào,mừng,bạn,đến,với,VietNam";
$phan_tu = explode(",", $chuoi1);
echo "Mảng các phần tử sau khi tách chuỗi: <br>";
print_r($phan_tu);
echo "<br>";

//14 nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$phan_tu2 = array("Chúc", "bạn", "ngủ", "ngon");
$chuoi2 = implode(",", $phan_tu2);
echo "Chuỗi sau khi nối các phần tử: " . $chuoi2;
echo "<br>";

//15 Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
$input = "lovepeanut";
# Thêm chuỗi "-=" vào đầu, chiều dài tổng cộng là 20 ký tự
echo str_pad($input, 20, "-=", STR_PAD_LEFT) . "<br>"; 

# Thêm ký tự "_" vào cả hai đầu, chiều dài tổng cộng là 20 ký tự
echo str_pad($input, 20, "_", STR_PAD_BOTH) . "<br>";   


# Thêm chuỗi "___" vào cuối, chiều dài tổng cộng là 13 ký tự .Chuỗi gốc đã dài hơn 13 ký tự, nên kết quả không thay đổi
echo str_pad($input, 13, "___") . "<br>";


# Thêm ký tự "*" vào cuối, chiều dài tổng cộng là 3 ký tự. Chuỗi gốc đã dài hơn 3 ký tự, nên kết quả không thay đổi
echo str_pad($input, 3, "*") . "<br>";


//16.Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
$str5 = "Chao mung ban den voi";
$subString = "hoa";

if (substr($str5, -strlen($subString)) === $subString) {
    echo "Chuỗi kết thúc bằng chuỗi con khác!";
} else {
    echo "Chuỗi không kết thúc bằng chuỗi con khác!";
}
echo "<br>";

//17.Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
# Chuỗi chính và chuỗi con cần kiểm tra
$chuoiChinh = "Hôm nay trời đẹp và tôi rất vui!";
$chuoiCon = "trời đẹp";

# Sử dụng hàm strpos() để kiểm tra chuỗi con
if (strpos($chuoiChinh, $chuoiCon) !== false) {
    echo "Chuỗi chính chứa chuỗi con!";
} else {
    echo "Chuỗi chính không chứa chuỗi con.";
}

//18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$str18 = "!@#$%^&LinhChi30@#%%";
$result = preg_replace("/\W/", "_", $str18);
echo $result;
echo "<br>";

//19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().

$x=10;
if(is_int($x)){
 echo"Biến x thuộc kiểu số nguyên";
}
else{
 echo"Biến x không thuộc kiểu số nguyên";
}
echo "<br>";

// 20.Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
$str19 = "daolinhchi2003@gmail.com";
$str20 = "daolinhchi2003";

# Hàm kiểm tra email hợp lệ
function checkEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email hợp lệ!";
    } else {
        return "Email không hợp lệ!";
    }
}

# Kiểm tra cả hai chuỗi
echo "Câu 20: ";
echo "Chuỗi 1: " . checkEmail($str19) . "<br>";
echo "Chuỗi 2: " . checkEmail($str20);

?>
 
</body>
</html>