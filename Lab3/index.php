<?php
require_once "includes/header.php";
require_once "functions/common.php";

// Danh sach san pham thu nhat (Giay bong da)
$giay_bong_da = [
    ["id" => "GBD01", "proname" => "Nike Mercurial Vapor 15", "quantity" => 10, "price" => 1500000],
    ["id" => "GBD02", "proname" => "Adidas X Speedportal", "quantity" => 8, "price" => 1400000],
    ["id" => "GBD03", "proname" => "Puma Future Match", "quantity" => 12, "price" => 1350000],
    ["id" => "GBD04", "proname" => "Mizuno Morelia Neo 3", "quantity" => 15, "price" => 2200000],
    ["id" => "GBD05", "proname" => "Nike Phantom GX", "quantity" => 5, "price" => 1850000],
    ["id" => "GBD06", "proname" => "Adidas Copa Pure", "quantity" => 20, "price" => 1900000],
    ["id" => "GBD07", "proname" => "Puma Ultra Ultimate", "quantity" => 7, "price" => 1150000],
    ["id" => "GBD08", "proname" => "Kamito TA11", "quantity" => 9, "price" => 600000],
    ["id" => "GBD09", "proname" => "Wika Quang Hai", "quantity" => 14, "price" => 450000],
    ["id" => "GBD10", "proname" => "Pan Vigor", "quantity" => 6, "price" => 550000]
];

// Danh sach san pham thu hai (Phu kien the thao)
$phu_kien = [
    ["id" => "PK01", "proname" => "Tất chống trượt", "quantity" => 30, "price" => 32000],
    ["id" => "PK02", "proname" => "Băng keo thể thao", "quantity" => 20, "price" => 15000],
    ["id" => "PK03", "proname" => "Găng tay thủ môn", "quantity" => 15, "price" => 450000],
    ["id" => "PK04", "proname" => "Bảo vệ ống đồng", "quantity" => 50, "price" => 50000],
    ["id" => "PK05", "proname" => "Túi đựng giày", "quantity" => 10, "price" => 70000],
    ["id" => "PK06", "proname" => "Bình nước thể thao", "quantity" => 40, "price" => 80000],
    ["id" => "PK07", "proname" => "Quần áo đá bóng", "quantity" => 12, "price" => 120000],
    ["id" => "PK08", "proname" => "Bơm bóng", "quantity" => 25, "price" => 40000],
    ["id" => "PK09", "proname" => "Quả bóng đá Động Lực", "quantity" => 18, "price" => 650000],
    ["id" => "PK10", "proname" => "Còi trọng tài", "quantity" => 22, "price" => 220000]
];
?>

<div class="row">
    <div class="col-12">
        <h2 class="text-center mb-4" style="color: blue;">Danh Sách Sản Phẩm</h2>

        <?php
        // Hien thi danh sach 1 voi dinh dang mac dinh
        showProductTable($giay_bong_da, "Danh Sách Giày Bóng Đá");

        // Hien thi danh sach 2 voi dinh dang VNĐ va 2 chu so thap phan
        showProductTable($phu_kien, "Danh Sách Phụ Kiện Thể Thao", "VNĐ", 2);
        ?>
    </div>
</div>

<section class="mt-5">
    <h2 class="mb-3">What is Lorem Ipsum?</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride
        Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's
        Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop
        publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum.</p>
</section>


<?php
require_once "includes/footer.php";
?>