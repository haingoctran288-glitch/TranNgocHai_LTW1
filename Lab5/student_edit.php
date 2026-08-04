<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";
$studentDAO = new StudentDAO();

if (!isset($_GET["id"])) {
    header("Location: student_index.php");
    exit;
}
$id = (int)$_GET["id"];
$student = $studentDAO->getById($id);

if ($student == null) {
    echo "<div class='container mt-5 alert alert-danger text-center'>Không tìm thấy sinh viên!</div>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = trim($_POST["studentCode"]);
    $name = trim($_POST["fullName"]);
    $phone = trim($_POST["phone"]);
    $gender = $_POST["gender"];

    if (empty($code) || empty($name)) {
        $message = "Mã sinh viên và Họ tên không được để trống!";
    } else {
        $student->studentCode = $code;
        $student->fullName = $name;
        $student->phone = $phone;
        $student->gender = $gender;
        
        if ($studentDAO->update($student)) {
            header("Location: student_index.php");
            exit;
        } else {
            $message = "Cập nhật sinh viên thất bại!";
        }
    }
}

require_once "includes/header.php";
?>

<div class="container mt-4 mb-5 w-50">
    <h2 class="text-center">Sửa thông tin sinh viên</h2>
    <?php if(isset($message)){ ?>
        <div class="alert alert-danger">
            <?= $message ?>
        </div>
    <?php } ?>
    <form method="post" class="shadow p-4 bg-light rounded">
        <div class="mb-3">
            <label class="fw-bold">Mã sinh viên</label>
            <input type="text" name="studentCode" class="form-control" value="<?= htmlspecialchars($student->studentCode) ?>" required>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Họ và tên</label>
            <input type="text" name="fullName" class="form-control" value="<?= htmlspecialchars($student->fullName) ?>" required>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($student->phone) ?>">
        </div>
        <div class="mb-3">
            <label class="fw-bold d-block">Giới tính</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Nam" <?= $student->gender == 'Nam' ? 'checked' : '' ?>>
                <label class="form-check-label">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Nữ" <?= $student->gender == 'Nữ' ? 'checked' : '' ?>>
                <label class="form-check-label">Nữ</label>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-warning px-4 fw-bold">Cập nhật</button>
            <a href="student_index.php" class="btn btn-secondary px-4">Quay lại</a>
        </div>
    </form>
</div>

<?php require_once "includes/footer.php"; ?>
