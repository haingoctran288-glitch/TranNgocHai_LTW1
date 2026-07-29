<?php
require_once "includes/header.php";
require_once "classes/Student.php";

$students = [
    new Student("SV01", "Nguyễn Văn A", "Nam", 2005, 8, 9, 7),
    new Student("SV02", "Trần Thị B", "Nữ", 2004, 9, 9, 9.5),
    new Student("SV03", "Lê Văn C", "Nam", 2005, 4, 5, 4.5),
    new Student("SV04", "Phạm Thị D", "Nữ", 2006, 6, 7, 7.5),
    new Student("SV05", "Hoàng Văn E", "Nam", 2003, 10, 9, 8.5),
    new Student("SV06", "Vũ Thị F", "Nữ", 2005, 7, 6, 8),
    new Student("SV07", "Đặng Văn G", "Nam", 2004, 5, 5, 5),
    new Student("SV08", "Bùi Thị H", "Nữ", 2005, 9, 8, 8.5),
    new Student("SV09", "Đỗ Văn I", "Nam", 2006, 3, 4, 2),
    new Student("SV10", "Hồ Thị K", "Nữ", 2005, 8, 8, 8),
    new Student("SV11", "Ngô Văn L", "Nam", 2004, 6.5, 7, 6),
    new Student("SV12", "Dương Thị M", "Nữ", 2005, 9.5, 9, 9),
    new Student("SV13", "Lý Văn N", "Nam", 2003, 5, 6, 5.5),
    new Student("SV14", "Đinh Thị P", "Nữ", 2006, 7.5, 8, 7),
    new Student("SV15", "Tô Văn Q", "Nam", 2005, 4, 3, 5),
    new Student("SV16", "Trương Thị R", "Nữ", 2004, 8.5, 9, 8),
    new Student("SV17", "Đoàn Văn S", "Nam", 2005, 6, 6, 6),
    new Student("SV18", "Tôn Thị T", "Nữ", 2006, 9, 9.5, 9),
    new Student("SV19", "Lâm Văn U", "Nam", 2005, 7, 7, 7.5),
    new Student("SV20", "Từ Thị V", "Nữ", 2004, 5.5, 6, 5)
];

// Cac ham thong ke
function countStudents($students)
{
    return count($students);
}

function countMaleStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->gender == "Nam")
            $count++;
    }
    return $count;
}

function countFemaleStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->gender == "Nữ")
            $count++;
    }
    return $count;
}

function countScholarshipStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->getScholarship() == "Có học bổng")
            $count++;
    }
    return $count;
}

function countExcellentStudents($students)
{
    $count = 0;
    foreach ($students as $st) {
        if ($st->getRank() == "Xuất sắc")
            $count++;
    }
    return $count;
}

function getAverageScore($students)
{
    $total = 0;
    foreach ($students as $st) {
        $total += $st->getAverage();
    }
    return count($students) > 0 ? $total / count($students) : 0;
}

function getHighestAverage($students)
{
    $max = 0;
    foreach ($students as $st) {
        if ($st->getAverage() > $max)
            $max = $st->getAverage();
    }
    return $max;
}

function getLowestAverage($students)
{
    if (count($students) == 0)
        return 0;
    $min = $students[0]->getAverage();
    foreach ($students as $st) {
        if ($st->getAverage() < $min)
            $min = $st->getAverage();
    }
    return $min;
}

?>

<!-- Dashboard -->
<div class="row mb-5" style="background-color: #f0f0f0; padding: 20px;">
    <div class="col-12">
        <h2 style="color: red; text-align: center;">Thống Kê Sinh Viên</h2>
        <hr>

        <div class="row g-3">
            <div class="col-sm-3">
                <div class="card h-100" style="background-color: #ffff99; border: 2px solid orange;">
                    <div class="card-body text-center">
                        <p>Số lượng SV:</p>
                        <b style="font-size: 24px; color: blue;"><?= countStudents($students) ?></b>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card h-100" style="background-color: #ccffff; border: 2px solid blue;">
                    <div class="card-body text-center">
                        <p>Nam / Nữ:</p>
                        <b style="font-size: 24px; color: darkblue;"><?= countMaleStudents($students) ?> / <?= countFemaleStudents($students) ?></b>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card h-100" style="background-color: #ffccff; border: 2px solid pink;">
                    <div class="card-body text-center">
                        <p>Có học bổng:</p>
                        <b style="font-size: 24px; color: purple;"><?= countScholarshipStudents($students) ?></b>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card h-100" style="background-color: #ccffcc; border: 2px solid green;">
                    <div class="card-body text-center">
                        <p>Xuất sắc:</p>
                        <b style="font-size: 24px; color: green;"><?= countExcellentStudents($students) ?></b>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="alert alert-secondary" style="background-color: #cccccc;">
                    Điểm trung bình lớp: <b><?= round(getAverageScore($students), 2) ?></b>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="alert alert-primary">
                    Điểm trung bình cao nhất: <b style="color: red;"><?= round(getHighestAverage($students), 2) ?></b>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="alert alert-danger" style="background-color: #ff9999;">
                    Điểm trung bình thấp nhất: <b><?= round(getLowestAverage($students), 2) ?></b>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h3 style="color: green;">Bảng Danh Sách Sinh Viên</h3>

        <table class="table table-bordered" style="border: 3px solid black; background-color: #ffffff;">
            <thead>
                <tr style="background-color: #33ccff; color: black; text-align: center;">
                    <th>Mã SV</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Năm sinh</th>
                    <th>Tuổi</th>
                    <th>Điểm HTML</th>
                    <th>Điểm CSS</th>
                    <th>Điểm PHP</th>
                    <th>Tổng điểm</th>
                    <th>Điểm TB</th>
                    <th>Xếp loại</th>
                    <th>Học bổng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                    $student->showInfo();
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once "includes/footer.php";
?>