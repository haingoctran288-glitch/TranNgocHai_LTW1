<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hai Sport - Lab 2 - test2.php</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Thêm icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .product-img { height: 220px; object-fit: cover; border-bottom: 1px solid #eee; }
        .banner { 
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=1964&auto=format&fit=crop') no-repeat center center; 
            background-size: cover;
            color: white; 
            padding: 80px 0; 
            text-align: center; 
        }
        .footer { background-color: #212529; color: #adb5bd; padding: 40px 0 20px; margin-top: 60px; border-top: 4px solid #0d6efd; }
        .brand-box { transition: 0.3s; cursor: pointer; }
        .brand-box:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); background-color: #0d6efd !important; color: white; }
        .card { transition: 0.3s; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .card:hover { transform: translateY(-5px); box-shadow: 0 12px 20px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="bg-light">

<?php
// mang menu
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];

// mang sp
$products = [
    [
        "name" => "Nike Zoom Mercurial Superfly 9",
        "price" => 3500000,
        "image" => "https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?q=80&w=1000&auto=format&fit=crop"
    ],
    [
        "name" => "Adidas X Crazyfast.1 FG",
        "price" => 3200000,
        "image" => "https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=1000&auto=format&fit=crop"
    ],
    [
        "name" => "Puma Future Ultimate",
        "price" => 2800000,
        "image" => "https://images.unsplash.com/photo-1620803525203-01004cd8247f?q=80&w=1000&auto=format&fit=crop"
    ],
    [
        "name" => "Mizuno Morelia Neo IV Beta",
        "price" => 4100000,
        "image" => "https://images.unsplash.com/photo-1579298245158-33e8f568f7d3?q=80&w=1000&auto=format&fit=crop"
    ]
];

// mang thuong hieu
$brands = ["Nike", "Adidas", "Puma", "Mizuno"];

// mang dMuc
$categories = ["Giày sân 11 người (FG)", "Giày sân 7 người (TF)", "Giày Futsal (IC)", "Phụ kiện & Quần áo"];
?>

<!-- Navbar Bootstrap 5 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold text-uppercase" href="#"><i class="bi bi-dribbble text-primary me-2"></i>Hai Sport</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainMenu">
      <ul class="navbar-nav mx-auto">
        <?php foreach($menus as $menu): ?>
            <li class="nav-item">
                <a class="nav-link text-uppercase fw-semibold px-3" href="#"><?= $menu ?></a>
            </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Banner section -->
<section class="banner">
    <div class="container">
        <h1 class="display-4 fw-bold text-uppercase mb-3">Tốc Độ Đỉnh Cao - Bứt Phá Giới Hạn</h1>
        <p class="lead mb-4">Khám phá bộ sưu tập giày bóng đá chính hãng mới nhất 2026. Ưu đãi lên đến 30% cho khách hàng mới!</p>
        <a href="#products" class="btn btn-primary btn-lg px-5 rounded-pill">Mua Ngay <i class="bi bi-arrow-right ms-2"></i></a>
    </div>
</section>

<div class="container mt-5">
    
    <!-- Phần Sản phẩm -->
    <section id="products" class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-uppercase"><i class="bi bi-fire text-danger me-2"></i>Sản Phẩm Bán Chạy</h2>
            <a href="#" class="text-decoration-none">Xem tất cả <i class="bi bi-chevron-right"></i></a>
        </div>
        
        <div class="row g-4">
            <?php foreach($products as $product): ?>
            <div class="col-sm-6 col-md-3">
                <div class="card h-100 rounded-3 overflow-hidden">
                    <img src="<?= $product['image'] ?>" class="card-img-top product-img" alt="<?= $product['name'] ?>">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title fs-6 fw-bold mb-3"><?= $product['name'] ?></h5>
                        <p class="card-text text-danger fw-bold fs-5 mt-auto mb-3"><?= number_format($product['price'], 0, ',', '.') ?>đ</p>
                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-outline-dark"><i class="bi bi-eye me-1"></i> Chi tiết</a>
                            <a href="#" class="btn btn-primary"><i class="bi bi-cart-plus me-1"></i> Thêm giỏ hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Phần Thương hiệu -->
    <section class="mb-5 mt-5 pt-4 border-top">
        <h3 class="text-center fw-bold text-uppercase mb-4">Thương Hiệu Nổi Bật</h3>
        <div class="row g-3 text-center justify-content-center">
            <?php foreach($brands as $brand): ?>
            <div class="col-4 col-md-2">
                <div class="p-3 bg-white rounded shadow-sm fw-bold text-uppercase brand-box border">
                    <?= $brand ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Form Đăng ký -->
    <section class="mt-5 pt-4 border-top">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-uppercase">Đăng Ký Tư Vấn</h2>
                    <p class="text-muted">Nhận ngay thông tin khuyến mãi và báo giá chi tiết sản phẩm phù hợp.</p>
                </div>
                
                <div class="card shadow border-0 rounded-4">
                    <div class="card-body p-5">
                        <form action="#" method="POST">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Họ và tên *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" name="fullname" placeholder="Vd: Trần Ngọc Hải" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Số điện thoại *</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                        <input type="tel" class="form-control" name="phone" placeholder="Vd: 0987654321" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Địa chỉ Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Bạn đang quan tâm dòng sản phẩm nào?</label>
                                <select class="form-select" name="category">
                                    <option value="" selected disabled>-- Chọn dòng sản phẩm --</option>
                                    <?php foreach($categories as $cat): ?>
                                        <option value="<?= $cat ?>"><?= $cat ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="form-label fw-bold d-block">Hình thức liên hệ ưu tiên</label>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="method" id="call" value="Gọi điện" checked>
                                        <label class="form-check-label" for="call">Gọi điện trực tiếp</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="method" id="zalo" value="Zalo">
                                        <label class="form-check-label" for="zalo">Nhắn tin Zalo</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Thời gian nghe máy phù hợp</label>
                                    <select class="form-select mt-2" name="contact_time">
                                        <option value="Sáng">Buổi sáng (8h - 12h)</option>
                                        <option value="Chiều">Buổi chiều (13h - 17h)</option>
                                        <option value="Tối">Buổi tối (18h - 21h)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold">Yêu cầu cụ thể (Size giày, màu sắc...)</label>
                                <textarea class="form-control" name="message" rows="3" placeholder="Ví dụ: Mình cần tư vấn size 41 cho chân bè..."></textarea>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill"><i class="bi bi-send me-2"></i>Gửi Yêu Cầu</button>
                                <button type="reset" class="btn btn-light btn-lg px-5 rounded-pill border">Làm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-white fw-bold mb-3"><i class="bi bi-dribbble text-primary me-2"></i>HAI SPORT</h5>
                <p>Cửa hàng chuyên cung cấp giày bóng đá và phụ kiện thể thao chính hãng uy tín số 1 Việt Nam.</p>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5 class="text-white fw-bold mb-3">Liên Hệ</h5>
                <p><i class="bi bi-geo-alt me-2"></i> 123 Đường Tôn Đức Thắng, Q1, TP.HCM</p>
                <p><i class="bi bi-telephone me-2"></i> Hotline: 0987.654.321</p>
                <p><i class="bi bi-envelope me-2"></i> haisport@example.com</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-white fw-bold mb-3">Thông Tin Đồ Án</h5>
                <p>Sinh viên: <b>Trần Ngọc Hải</b></p>
                <p>MSSV: <b>2123110179</b></p>
                <p>Môn học: Lập Trình Web 1</p>
            </div>
        </div>
        <hr class="border-secondary mt-4">
        <p class="text-center mb-0">&copy; 2026 Hai Sport. Thiết kế và phát triển bởi Trần Ngọc Hải.</p>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
