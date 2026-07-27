<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài Thực Hành Lab 1 - Câu C</title>
</head>
<body>
    <h1>Câu C. Câu 2 (Lab1/test2.php)</h1>
    
    <h2>1. Phép toán số học</h2>
    <?php
    $a = 15;
    $b = 4;
    echo "Số a = $a, Số b = $b <br>";
    echo "Cộng: " . ($a + $b) . "<br>";
    echo "Trừ: " . ($a - $b) . "<br>";
    echo "Nhân: " . ($a * $b) . "<br>";
    echo "Chia: " . ($a / $b) . "<br>";
    echo "Chia lấy dư: " . ($a % $b) . "<br>";
    ?>
    <hr>

    <h2>2. So sánh biến (int và string)</h2>
    <?php
    $num = 10;
    $strNum = "10";
    echo "Biến \$num = $num (int)<br>Biến \$strNum = '$strNum' (string)<br>";
    
    echo "Toán tử == : "; var_dump($num == $strNum); echo "<br>";
    echo "Toán tử === : "; var_dump($num === $strNum); echo "<br>";
    echo "Toán tử != : "; var_dump($num != $strNum); echo "<br>";
    echo "Toán tử <> : "; var_dump($num <> $strNum); echo "<br>";
    echo "Toán tử !== : "; var_dump($num !== $strNum); echo "<br>";
    
    /* 
       Sự khác nhau:
       - ==, !=, <>: Chỉ so sánh giá trị. (10 và "10" bằng nhau).
       - ===, !==: So sánh cả giá trị và kiểu dữ liệu.
    */
    echo "<i>(Xem comment trong code để biết sự khác nhau)</i>";
    ?>
    <hr>

    <h2>3. Phép tăng trước và tăng sau</h2>
    <?php
    $x = 5;
    echo "Giá trị ban đầu \$x: $x <br>";
    $y = ++$x;
    echo "++\$x => \$x = $x, \$y = $y <br>";

    $x = 5;
    echo "Giá trị ban đầu \$x: $x <br>";
    $y = $x++;
    echo "\$x++ => \$x = $x, \$y = $y <br>";
    
    /*
       - ++$x: Tăng trước rồi mới gán.
       - $x++: Gán trước rồi mới tăng.
    */
    echo "<i>(Xem comment trong code để biết sự khác nhau)</i>";
    ?>
    <hr>

    <h2>4. Toán tử nối chuỗi (. và .=)</h2>
    <?php
    $chuoi1 = "Xin chào";
    $chuoi2 = " các bạn!";
    
    $ketQua1 = $chuoi1 . $chuoi2;
    echo "Toán tử (.) : " . $ketQua1 . "<br>";

    $chuoi1 .= $chuoi2;
    echo "Toán tử (.=) : " . $chuoi1 . "<br>";
    
    /*
       - . : Ghép chuỗi trả về chuỗi mới.
       - .= : Nối chuỗi và gán cho biến gốc.
    */
    echo "<i>(Xem comment trong code để biết sự khác nhau)</i>";
    ?>
    <hr>

    <h2>5. Đếm số lượng ký tự</h2>
    <?php
    $chuoiKhongDau = "Hello Viet Nam";
    $chuoiCoDau = "Xin chào Việt Nam";

    echo "strlen('$chuoiKhongDau') = " . strlen($chuoiKhongDau) . "<br>";
    echo "mb_strlen('$chuoiCoDau') = " . mb_strlen($chuoiCoDau, "UTF-8") . "<br>";
    
    /*
       - strlen(): Đếm số byte.
       - mb_strlen(): Đếm số ký tự thực tế (hỗ trợ tiếng Việt).
    */
    echo "<i>(Xem comment trong code để biết sự khác nhau)</i>";
    ?>
    <hr>

    <h2>6. Chữ in hoa và chữ thường</h2>
    <?php
    $chuoiVanBan = "Xin chào Lập trình Web";
    echo "Chuỗi gốc: $chuoiVanBan <br>";
    echo "strtoupper(): " . strtoupper($chuoiVanBan) . "<br>";
    echo "strtolower(): " . strtolower($chuoiVanBan) . "<br>";
    echo "mb_strtoupper(): " . mb_strtoupper($chuoiVanBan, "UTF-8") . "<br>";
    echo "mb_strtolower(): " . mb_strtolower($chuoiVanBan, "UTF-8") . "<br>";
    
    /*
       - strtoupper/strtolower: Không hỗ trợ tiếng Việt có dấu tốt.
       - mb_strtoupper/mb_strtolower: Xử lý đúng chữ hoa/thường tiếng Việt có dấu.
    */
    echo "<i>(Xem comment trong code để biết sự khác nhau)</i>";
    ?>
    <hr>

    <h2>7. Ép kiểu chuỗi về int</h2>
    <?php
    $str1 = "123 abc";
    $str2 = "abc 123";

    echo "'$str1' => (int): "; var_dump((int)$str1); echo "<br>";
    echo "'$str2' => (int): "; var_dump((int)$str2); echo "<br>";
    ?>
    <hr>

    <h2>8. var_dump() các kiểu dữ liệu</h2>
    <?php
    $varInt = 2024;
    $varFloat = 3.14;
    $varString = "Hello PHP";
    $varBool = true;

    var_dump($varInt); echo "<br>";
    var_dump($varFloat); echo "<br>";
    var_dump($varString); echo "<br>";
    var_dump($varBool); echo "<br>";
    ?>
</body>
</html>
