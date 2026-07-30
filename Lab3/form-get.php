<?php
require_once "includes/header.php";

$fullname = "";
$birthyear = "";
$gender = "";
$mclass = "";

if (isset($_GET['fullname'])) {
    $fullname = $_GET['fullname'];
    $birthyear = $_GET['birthyear'];
    $gender = $_GET['gender'];
    $mclass = $_GET['mclass'];
}
?>

<main class="container my-5">
    <section class="mb-5 shadow p-3 mx-auto" style="width: 500px; background-color: #f8f9fa; border-radius: 10px;">
        <h2 class="text-center text-primary">Thông tin (GET)</h2>
        <form action="form-get.php" method="get">
            <div class="mb-3 mt-3">
                <label for="fullname" class="fw-bold">Họ tên</label>
                <input type="text" class="form-control" id="fullname" placeholder="Họ tên" name="fullname" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="birthyear" class="fw-bold">Tuổi</label>
                <input type="number" class="form-control" id="birthyear" placeholder="Tuổi" name="birthyear" required>
            </div>
            <div class="mb-3 mt-3">
                <label class="fw-bold d-block">Giới tính: </label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender1" name="gender" value="1" checked>
                    <label class="form-check-label" for="gender1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender2" name="gender" value="2">
                    <label class="form-check-label" for="gender2">Nữ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="gender3" name="gender" value="3">
                    <label class="form-check-label" for="gender3">Khác</label>
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="mclass" class="fw-bold">Lớp</label>
                <select name="mclass" id="mclass" class="form-control">
                    <option value="CCQ2311E">Lớp CCQ2311E</option>
                    <option value="CCQ2311F">Lớp CQ2311F</option>
                    <option value="CCQ2311A">Lớp CCQ2311A</option>
                </select>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-primary">Gửi</button>
                <button type="reset" class="btn btn-secondary">Làm lại</button>
            </div>
        </form>
    </section>

    <?php
    if (isset($_GET['fullname'])) {
        $genderText = ($gender == "1") ? "Nam" : (($gender == "2") ? "Nữ" : "Khác");
        ?>
        <div class="card mt-4 mx-auto" style="width: 500px;">
            <div class="card-header bg-primary text-white fw-bold">
                Thông tin đã nhập
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0">
                    <tr>
                        <th>Họ và tên</th>
                        <td><?= htmlspecialchars($fullname) ?></td>
                    </tr>
                    <tr>
                        <th>Tuổi</th>
                        <td><?= htmlspecialchars($birthyear) ?></td>
                    </tr>
                    <tr>
                        <th>Giới tính</th>
                        <td><?= $genderText ?></td>
                    </tr>
                    <tr>
                        <th>Lớp</th>
                        <td><?= htmlspecialchars($mclass) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>
</main>

<?php require_once "includes/footer.php"; ?>