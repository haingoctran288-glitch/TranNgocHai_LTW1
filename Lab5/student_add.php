<?php
require_once "dao/StudentDAO.php";
require_once "models/Student.php";
$studentDAO = new StudentDAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = new Student(
        $_POST["studentCode"],
        $_POST["fullName"],
        $_POST["phone"],
        $_POST["gender"]
    );
    if ($studentDAO->insert($student)) {
        header("Location: student_index.php");
        exit;
    } else {
        $message = "Thêm sinh viên thất bại!";
    }
}

require_once "includes/header.php";
?>

<div class="container mt-4 mb-5 w-50">
    <h2 class="text-center">Thêm sinh viên</h2>
    <?php if(isset($message)){ ?>
        <div class="alert alert-danger">
            <?= $message ?>
        </div>
    <?php } ?>
    <form method="post" class="shadow p-4 bg-light rounded">
        <div class="mb-3">
            <label class="fw-bold">Mã sinh viên</label>
            <input type="text" name="studentCode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Họ và tên</label>
            <input type="text" name="fullName" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Số điện thoại</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label class="fw-bold d-block">Giới tính</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Nam" checked>
                <label class="form-check-label">Nam</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Nữ">
                <label class="form-check-label">Nữ</label>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary px-4">Lưu</button>
            <a href="student_index.php" class="btn btn-secondary px-4">Quay lại</a>
        </div>
    </form>
</div>

<?php require_once "includes/footer.php"; ?>
