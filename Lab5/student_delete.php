<?php
require_once "dao/StudentDAO.php";
$studentDAO = new StudentDAO();

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    // Kiểm tra sinh viên có tồn tại không
    $student = $studentDAO->getById($id);
    if ($student != null) {
        $studentDAO->delete($id);
    }
}
// Chuyển hướng về trang danh sách
header("Location: student_index.php");
exit;
?>
