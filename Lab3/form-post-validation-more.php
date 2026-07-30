<?php
require_once "includes/header.php";

$errors = [];
$successData = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'] ?? '';
    $age = $_POST['age'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $mclass = $_POST['mclass'] ?? '';
    $hobbies = $_POST['hobbies'] ?? [];
    $address = trim($_POST['address'] ?? '');
    $dob = $_POST['dob'] ?? '';

    // Validate Họ tên
    if (empty(trim($fullname))) {
        $errors[] = "Họ tên không được để trống.";
    } elseif (mb_strlen(trim($fullname)) < 5) {
        $errors[] = "Họ tên phải có ít nhất 5 ký tự.";
    }

    // Validate Tuổi
    if (empty($age)) {
        $errors[] = "Tuổi không được để trống.";
    } elseif (!is_numeric($age) || $age < 18 || $age > 60) {
        $errors[] = "Tuổi phải là số và nằm trong khoảng từ 18 đến 60.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email không được để trống.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không đúng định dạng.";
    }

    // Validate Giới tính
    if (empty($gender)) {
        $errors[] = "Giới tính bắt buộc chọn.";
    }

    // Validate Lớp
    if (empty($mclass)) {
        $errors[] = "Lớp bắt buộc chọn.";
    }

    // Validate Sở thích
    if (count($hobbies) == 0) {
        $errors[] = "Chọn ít nhất một sở thích.";
    }

    // Validate Địa chỉ
    if (empty($address)) {
        $errors[] = "Địa chỉ không được để trống.";
    }

    // Validate Ngày sinh
    if (empty($dob)) {
        $errors[] = "Ngày sinh không được để trống.";
    }

    // Validate Ảnh đại diện
    if (empty($_FILES['avatar']['name'])) {
        $errors[] = "Ảnh đại diện bắt buộc chọn.";
    } else {
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $ext = strtolower(pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed_ext)) {
            $errors[] = "Chỉ chấp nhận các định dạng ảnh: jpg, jpeg, png, gif, webp.";
        }
        $size = $_FILES['avatar']['size'];
        if ($size > 200 * 1024) { // 200KB
            $errors[] = "Kích thước ảnh không được vượt quá 200KB.";
        }
    }

    if (count($errors) == 0) {
        $successData = [
            'fullname' => $fullname,
            'age' => $age,
            'email' => $email,
            'gender' => ($gender == '1') ? 'Nam' : (($gender == '2') ? 'Nữ' : 'Khác'),
            'mclass' => $mclass,
            'hobbies' => implode(", ", $hobbies),
            'address' => $address,
            'dob' => $dob,
            'avatar_name' => $_FILES['avatar']['name']
        ];
    }
}
?>

<main class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <section class="shadow p-4 bg-light" style="border-radius: 10px; border-top: 4px solid #17a2b8;">
                <h3 class="mb-4 text-info text-center">Đăng Ký Thành Viên (Validation)</h3>
                <form action="form-post-validation-more.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Họ và tên</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Nhập họ và tên">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Tuổi</label>
                            <input type="number" class="form-control" name="age" placeholder="Tuổi (18-60)">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Ngày sinh</label>
                            <input type="date" class="form-control" name="dob">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold d-block">Giới tính</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="g1" name="gender" value="1">
                                <label class="form-check-label" for="g1">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="g2" name="gender" value="2">
                                <label class="form-check-label" for="g2">Nữ</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Lớp</label>
                            <select name="mclass" class="form-control">
                                <option value="">-- Chọn lớp --</option>
                                <option value="CCQ2311E">Lớp CCQ2311E</option>
                                <option value="CCQ2311F">Lớp CCQ2311F</option>
                                <option value="CCQ2311A">Lớp CCQ2311A</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold d-block">Sở thích</label>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="hb1" name="hobbies[]" value="Đọc sách">
                            <label class="form-check-label" for="hb1">Đọc sách</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="hb2" name="hobbies[]"
                                value="Chơi thể thao">
                            <label class="form-check-label" for="hb2">Chơi thể thao</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="hb3" name="hobbies[]" value="Nghe nhạc">
                            <label class="form-check-label" for="hb3">Nghe nhạc</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="hb4" name="hobbies[]" value="Du lịch">
                            <label class="form-check-label" for="hb4">Du lịch</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Địa chỉ</label>
                        <textarea class="form-control" name="address" rows="3" placeholder="Nhập địa chỉ"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Ảnh đại diện (dưới 200KB)</label>
                        <input type="file" class="form-control" name="avatar">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-info text-white px-4">Gửi thông tin</button>
                        <button type="reset" class="btn btn-secondary px-4">Làm lại</button>
                    </div>
                </form>
            </section>

            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                <?php if (count($errors) > 0): ?>
                    <div class="alert alert-danger mt-4 shadow-sm">
                        <h5 class="alert-heading fw-bold">Vui lòng sửa các lỗi sau:</h5>
                        <ul class="mb-0">
                            <?php foreach ($errors as $error): ?>
                                <li><?= htmlspecialchars($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="card mt-4 border-info shadow-sm">
                        <div class="card-header bg-info text-white fw-bold">
                            Đăng ký thành công! Thông tin của bạn:
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-bordered mb-0">
                                <tr>
                                    <th width="35%" class="ps-3">Họ và tên</th>
                                    <td><?= htmlspecialchars($successData['fullname']) ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Tuổi</th>
                                    <td><?= htmlspecialchars($successData['age']) ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Ngày sinh</th>
                                    <td><?= htmlspecialchars($successData['dob']) ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Giới tính</th>
                                    <td><?= $successData['gender'] ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Email</th>
                                    <td><?= htmlspecialchars($successData['email']) ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Lớp</th>
                                    <td><?= htmlspecialchars($successData['mclass']) ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Sở thích</th>
                                    <td><?= htmlspecialchars($successData['hobbies']) ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Địa chỉ</th>
                                    <td><?= nl2br(htmlspecialchars($successData['address'])) ?></td>
                                </tr>
                                <tr>
                                    <th class="ps-3">Tên file ảnh</th>
                                    <td><?= htmlspecialchars($successData['avatar_name']) ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php require_once "includes/footer.php"; ?>