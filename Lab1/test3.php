<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài Thực Hành Lab 1 - Câu D</title>
</head>
<body>
    <h1>Câu D. Câu 3 (Lab1/test3.php)</h1>
    
    <h2>1. Sử dụng trim()</h2>
    <?php
    $chuoiGoc1 = "   Xin chao cac ban   ";
    echo "Chuỗi gốc: '" . $chuoiGoc1 . "'<br>";
    $chuoiTrim = trim($chuoiGoc1);
    echo "Sau khi trim(): '" . $chuoiTrim . "'<br>";
    ?>
    <hr>

    <h2>2. ltrim() và rtrim()</h2>
    <?php
    $chuoiGoc2 = "   Lap trinh Web 1   ";
    echo "Chuỗi gốc: '" . $chuoiGoc2 . "'<br>";
    echo "Sau khi ltrim(): '" . ltrim($chuoiGoc2) . "'<br>";
    echo "Sau khi rtrim(): '" . rtrim($chuoiGoc2) . "'<br>";
    ?>
    <hr>

    <h2>3. Cắt chuỗi (substr())</h2>
    <?php
    $chuoiDai = "Truong Dai hoc ABC - Khoa Cong nghe thong tin"; 
    echo "Chuỗi gốc: '" . $chuoiDai . "'<br>";
    echo "10 ký tự đầu: '" . substr($chuoiDai, 0, 10) . "'<br>";
    echo "Từ ký tự 5 đến hết: '" . substr($chuoiDai, 4) . "'<br>";
    ?>
    <hr>

    <h2>4. Thay thế chuỗi (str_replace())</h2>
    <?php
    $chuoiThayThe = "Hom nay thoi tiet rat dep, toi di hoc lap trinh.";
    echo "Chuỗi gốc: '" . $chuoiThayThe . "'<br>";
    echo "Sau khi thay thế: '" . str_replace("di hoc", "di choi", $chuoiThayThe) . "'<br>";
    ?>
</body>
</html>
