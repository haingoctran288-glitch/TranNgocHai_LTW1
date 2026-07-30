<?php
require_once "includes/header.php";

// 20 sinh viên
$students_data = [
    ["name" => "Trần Ngọc Hải", "age" => 21, "gender" => "Nam", "class" => "CCQ2311E", "email" => "hai@gmail.com"],
    ["name" => "Trần Thị Bình", "age" => 21, "gender" => "Nữ", "class" => "CCQ2311F", "email" => "binh@gmail.com"],
    ["name" => "Lê Hoàng Châu", "age" => 19, "gender" => "Nam", "class" => "CCQ2311A", "email" => "chau@gmail.com"],
    ["name" => "Phạm Dung", "age" => 20, "gender" => "Nữ", "class" => "CCQ2311F", "email" => "dung@gmail.com"],
    ["name" => "Hoàng Văn Đạt", "age" => 22, "gender" => "Nam", "class" => "CCQ2311A", "email" => "dat@gmail.com"],
    ["name" => "Đặng Giang", "age" => 20, "gender" => "Nữ", "class" => "CCQ2311E", "email" => "giang@gmail.com"],
    ["name" => "Bùi Huy", "age" => 21, "gender" => "Nam", "class" => "CCQ2311F", "email" => "huy@gmail.com"],
    ["name" => "Đỗ Hương", "age" => 20, "gender" => "Nữ", "class" => "CCQ2311E", "email" => "huong@gmail.com"],
    ["name" => "Hồ Khang", "age" => 21, "gender" => "Nam", "class" => "CCQ2311F", "email" => "khang@gmail.com"],
    ["name" => "Ngô Lan", "age" => 20, "gender" => "Nữ", "class" => "CCQ2311E", "email" => "lan@gmail.com"],
    ["name" => "Dương Minh", "age" => 19, "gender" => "Nam", "class" => "CCQ2311A", "email" => "minh@gmail.com"],
    ["name" => "Lý Nga", "age" => 20, "gender" => "Nữ", "class" => "CCQ2311E", "email" => "nga@gmail.com"],
    ["name" => "Đinh Phong", "age" => 22, "gender" => "Nam", "class" => "CCQ2311F", "email" => "phong@gmail.com"],
    ["name" => "Tô Quyên", "age" => 20, "gender" => "Nữ", "class" => "CCQ2311A", "email" => "quyen@gmail.com"],
    ["name" => "Mai Sang", "age" => 21, "gender" => "Nam", "class" => "CCQ2311F", "email" => "sang@gmail.com"],
    ["name" => "Vũ Trang", "age" => 20, "gender" => "Nữ", "class" => "CCQ2311A", "email" => "trang@gmail.com"],
    ["name" => "Châu Uy", "age" => 20, "gender" => "Nam", "class" => "CCQ2311E", "email" => "uy@gmail.com"],
    ["name" => "Lâm Vy", "age" => 19, "gender" => "Nữ", "class" => "CCQ2311F", "email" => "vy@gmail.com"],
    ["name" => "Trịnh Xuân", "age" => 22, "gender" => "Nam", "class" => "CCQ2311A", "email" => "xuan@gmail.com"],
    ["name" => "Đào Yến", "age" => 21, "gender" => "Nữ", "class" => "CCQ2311E", "email" => "yen@gmail.com"]
];

$search_results = [];
$is_searched = false;

if (isset($_GET['btnSearch'])) {
    $is_searched = true;
    $s_name = trim($_GET['s_name'] ?? '');
    $s_gender = $_GET['s_gender'] ?? '';
    $s_class = $_GET['s_class'] ?? '';

    foreach ($students_data as $sv) {
        // Kiem tra ten
        $match_name = empty($s_name) || mb_stripos($sv['name'], $s_name, 0, 'UTF-8') !== false;
        // Kiem tra gioi tinh
        $match_gender = empty($s_gender) || $sv['gender'] == $s_gender;
        // Kiem tra lop
        $match_class = empty($s_class) || $sv['class'] == $s_class;

        if ($match_name && $match_gender && $match_class) {
            $search_results[] = $sv;
        }
    }
}
?>

<main class="container my-5">
    <h2 class="text-center text-primary mb-4 fw-bold">Tìm Kiếm Sinh Viên</h2>

    <div class="card shadow mb-5 mx-auto" style="max-width: 600px; border: 2px solid #0d6efd;">
        <div class="card-body bg-light">
            <form action="student-search.php" method="get">
                <div class="mb-3">
                    <label class="fw-bold mb-2">Họ và tên</label>
                    <input type="text" class="form-control" name="s_name"
                        value="<?= isset($_GET['s_name']) ? htmlspecialchars($_GET['s_name']) : '' ?>"
                        placeholder="Nhập tên cần tìm...">
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label class="fw-bold d-block mb-2">Giới tính</label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="s_gender" value="Nam" id="gNam"
                                <?= (isset($_GET['s_gender']) && $_GET['s_gender'] == 'Nam') ? 'checked' : '' ?>>
                            <label class="form-check-label" for="gNam">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="s_gender" value="Nữ" id="gNu"
                                <?= (isset($_GET['s_gender']) && $_GET['s_gender'] == 'Nữ') ? 'checked' : '' ?>>
                            <label class="form-check-label" for="gNu">Nữ</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="fw-bold mb-2">Lớp</label>
                        <select name="s_class" class="form-control">
                            <option value="">-- Tất cả --</option>
                            <option value="CCQ2311E" <?= (isset($_GET['s_class']) && $_GET['s_class'] == 'CCQ2311E') ? 'selected' : '' ?>>CCQ2311E</option>
                            <option value="CCQ2311F" <?= (isset($_GET['s_class']) && $_GET['s_class'] == 'CCQ2311F') ? 'selected' : '' ?>>CCQ2311F</option>
                            <option value="CCQ2311A" <?= (isset($_GET['s_class']) && $_GET['s_class'] == 'CCQ2311A') ? 'selected' : '' ?>>CCQ2311A</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="btnSearch" class="btn btn-primary px-4 fw-bold">TÌM KIẾM</button>
                    <a href="student-search.php" class="btn btn-secondary px-4">Làm lại</a>
                </div>
            </form>
        </div>
    </div>

    <?php if ($is_searched): ?>
        <?php if (count($search_results) > 0): ?>
            <h4 class="text-success mb-3 fw-bold">Kết quả tìm thấy (<?= count($search_results) ?> sinh viên):</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover shadow-sm">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Tuổi</th>
                            <th>Giới tính</th>
                            <th>Lớp</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1;
                        foreach ($search_results as $sv):
                            ?>
                            <tr class="text-center">
                                <td><?= $stt++ ?></td>
                                <td class="text-start"><?= htmlspecialchars($sv['name']) ?></td>
                                <td><?= htmlspecialchars($sv['age']) ?></td>
                                <td><?= htmlspecialchars($sv['gender']) ?></td>
                                <td><?= htmlspecialchars($sv['class']) ?></td>
                                <td><?= htmlspecialchars($sv['email']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-warning text-center fs-5 fw-bold shadow-sm">
                Không tìm thấy sinh viên phù hợp! 😢
            </div>
        <?php endif; ?>
    <?php endif; ?>

</main>

<?php require_once "includes/footer.php"; ?>