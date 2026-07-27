<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài Thực Hành Lab 1 - Trần Ngọc Hải</title>
</head>
<body>
    <h1>Bài Thực Hành Lab 1 - PHP Cơ Bản</h1>
    
    <?php
    /* 
       Yêu cầu 5: Chú thích (Comment)
       - Đây là chú thích nhiều dòng
       - File này thực hiện 5 yêu cầu của bài thực hành Lab 1.
    */
    ?>

    <h2>Yêu cầu 1: In trực tiếp thông tin (Sử dụng echo)</h2>
    <?php
    echo "Họ và tên: Trần Ngọc Hải <br>";
    echo "Ngày sinh: 28/03/2005 <br>";
    echo "Mã số sinh viên: 2123110179 <br>";
    ?>
    <hr>

    <h2>Yêu cầu 2: Khai báo và sử dụng biến</h2>
    <?php
    // Khai báo 4 biến chứa thông tin cá nhân
    $hoTen = "Trần Ngọc Hải";
    $maSV = "2123110179";
    $soDienThoai = "0987654321";
    $ngaySinh = "28/03/2005";

    echo "Họ tên (từ biến): " . $hoTen . "<br>";
    echo "Mã SV (từ biến): " . $maSV . "<br>";
    echo "Số điện thoại (từ biến): " . $soDienThoai . "<br>";
    echo "Ngày sinh (từ biến): " . $ngaySinh . "<br>";
    ?>
    <hr>

    <h2>Yêu cầu 3: Khai báo hằng số kết nối CSDL</h2>
    <?php
    define("HOST", "localhost");
    define("DATABASE", "ql_sinhvien");
    define("USERNAME", "root");
    define("PASSWORD", "");

    echo "HOST: " . HOST . "<br>";
    echo "DATABASE: " . DATABASE . "<br>";
    echo "USERNAME: " . USERNAME . "<br>";
    echo "PASSWORD: " . (PASSWORD === "" ? "(Rỗng)" : PASSWORD) . "<br>";
    ?>
    <hr>

    <h2>Yêu cầu 4: Phân biệt nháy đơn (' ') và nháy kép (" ")</h2>
    <?php
    $monHoc = "Lập trình Web 1";

    echo "1. Sử dụng nháy kép (\" \"):<br>";
    echo "Lệnh: echo \"Môn học hiện tại là: \$monHoc\";<br>";
    echo "Kết quả: \"Môn học hiện tại là: $monHoc\"<br><br>";

    echo "2. Sử dụng nháy đơn (' '):<br>";
    echo "Lệnh: echo 'Môn học hiện tại là: \$monHoc';<br>";
    echo "Kết quả: 'Môn học hiện tại là: $monHoc'<br>";
    ?>
</body>
</html>
