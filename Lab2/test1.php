<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - test1.php</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9; }
        /* menu ngang */
        nav { background-color: #2c3e50; color: white; padding: 15px; }
        nav ul { list-style-type: none; margin: 0; padding: 0; display: flex; justify-content: center; }
        nav ul li { margin: 0 20px; }
        nav ul li a { color: white; text-decoration: none; font-weight: bold; font-size: 16px; }
        nav ul li a:hover { color: #f1c40f; }
        
        .container { width: 80%; max-width: 1000px; margin: 30px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #2980b9; border-bottom: 2px solid #ecf0f1; padding-bottom: 10px; margin-bottom: 30px; }
        h2 { color: #34495e; border-left: 5px solid #3498db; padding-left: 10px; margin-bottom: 20px; }
        
        /* sec1 ds mon hoc */
        .s1 { margin-bottom: 40px; }
        .s1 ul { list-style-type: square; padding-left: 30px; font-size: 16px; }
        .s1 li { margin-bottom: 8px; }
        
        /* sec2 ds sv */
        .s2 { margin-bottom: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        table, th, td { border: 1px solid #bdc3c7; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #34495e; color: white; font-weight: bold; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #e8f4f8; }
        
        /* sec3 form dk */
        .s3 { margin-bottom: 30px; }
        form { background-color: #fdfefe; padding: 20px; border: 1px solid #ecf0f1; border-radius: 8px; max-width: 600px; margin: 0 auto; }
        .form-group { margin-bottom: 20px; }
        .form-group label { font-weight: bold; display: block; margin-bottom: 8px; color: #2c3e50; }
        .form-control { width: 100%; padding: 10px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; font-size: 15px; }
        .form-control:focus { outline: none; border-color: #3498db; }
        
        .radio-group, .checkbox-group { display: flex; flex-wrap: wrap; gap: 20px; margin-top: 5px; }
        .radio-group label, .checkbox-group label { font-weight: normal; cursor: pointer; display: flex; align-items: center; gap: 5px; color: #333; }
        
        .btn-group { display: flex; gap: 15px; margin-top: 25px; }
        .btn { padding: 12px 25px; color: white; border: none; cursor: pointer; border-radius: 4px; font-size: 16px; font-weight: bold; flex: 1; transition: 0.3s; }
        .btn-submit { background-color: #27ae60; }
        .btn-submit:hover { background-color: #2ecc71; }
        .btn-reset { background-color: #e74c3c; }
        .btn-reset:hover { background-color: #c0392b; }
    </style>
</head>
<body>

<?php
// mang menu
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];

// mang mon hoc
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];

// mang sv
$students = [
    ["id" => "SV001", "name" => "Nguyễn Văn A", "gender" => "Nam", "class" => "CNTT1"],
    ["id" => "SV002", "name" => "Trần Thị B", "gender" => "Nữ", "class" => "CNTT2"],
    ["id" => "SV003", "name" => "Lê Văn C", "gender" => "Nam", "class" => "CNTT3"],
    ["id" => "SV004", "name" => "Phạm Thị D", "gender" => "Nữ", "class" => "CNTT1"],
    ["id" => "SV005", "name" => "Trần Ngọc Hải", "gender" => "Nam", "class" => "CNTT4"],
];

// mang form
$faculties = ["Công nghệ thông tin", "Quản trị kinh doanh", "Kế toán", "Ngôn ngữ Anh"];
$classes = ["A1" => "CNTT1", "A2" => "CNTT2", "A3" => "CNTT3", "A4" => "CNTT4"];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = ["LT" => "Lập trình", "DS" => "Đọc sách", "AN" => "Âm nhạc", "DL" => "Du lịch", "TT" => "Thể thao"];
?>

<!-- Menu ngang -->
<nav>
    <ul>
        <?php foreach($menus as $menu): ?>
            <li><a href="#"><?= $menu ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<div class="container">
    <h1>Bài Thực Hành Lab 2 - Mảng trong PHP</h1>

    <!-- Danh sách môn học -->
    <section class="s1">
        <h2>1. Danh sách môn học</h2>
        <ul>
            <?php foreach($subjects as $subject): ?>
                <li>Môn học: <b><?= $subject ?></b></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Danh sách sinh viên -->
    <section class="s2">
        <h2>2. Danh sách sinh viên</h2>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $stt = 1;
                foreach($students as $sv): 
                ?>
                <tr>
                    <td><?= $stt++ ?></td>
                    <td><?= $sv['id'] ?></td>
                    <td><?= $sv['name'] ?></td>
                    <td><?= $sv['gender'] ?></td>
                    <td><?= $sv['class'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Form đăng ký -->
    <section class="s3">
        <h2>3. Form đăng ký thông tin</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label>Khoa:</label>
                <select class="form-control" name="faculty">
                    <option value="">-- Chọn Khoa --</option>
                    <?php foreach($faculties as $faculty): ?>
                        <option value="<?= $faculty ?>"><?= $faculty ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Lớp:</label>
                <select class="form-control" name="class">
                    <option value="">-- Chọn Lớp --</option>
                    <?php foreach($classes as $key => $className): ?>
                        <option value="<?= $key ?>"><?= $className ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label>Giới tính:</label>
                <div class="radio-group">
                    <?php foreach($genders as $index => $gender): ?>
                        <label>
                            <input type="radio" name="gender" value="<?= $gender ?>"> <?= $gender ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="form-group">
                <label>Sở thích:</label>
                <div class="checkbox-group">
                    <?php foreach($hobbies as $key => $hobbyName): ?>
                        <label>
                            <input type="checkbox" name="hobbies[]" value="<?= $key ?>"> <?= $hobbyName ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="form-group btn-group">
                <button type="submit" class="btn btn-submit">Đăng ký</button>
                <button type="reset" class="btn btn-reset">Làm mới</button>
            </div>
        </form>
    </section>

</div>

</body>
</html>
