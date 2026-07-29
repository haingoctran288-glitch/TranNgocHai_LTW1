<?php
// Dinh dang tien te
function formatPrice($price, $currency = "đ", $decimals = 0) {
    return number_format($price, $decimals, ',', '.') . " " . $currency;
}

// Tinh tong so luong san pham
function getTotalQuantity($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += $product['quantity'];
    }
    return $total;
}

// Tinh tong gia nhap tat ca san pham
function getTotalPrice($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += ($product['quantity'] * $product['price']);
    }
    return $total;
}

// Hien thi danh sach san pham theo dang bang
function showProductTable($products, $tableTitle, $currency = "đ", $decimals = 0) {
    echo "<h3 class='mt-4 mb-3'>$tableTitle</h3>";
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='table-dark'>";
    echo "<tr>";
    echo "<th>Mã SP</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Số lượng</th>";
    echo "<th>Giá nhập</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>{$product['id']}</td>";
        echo "<td>{$product['proname']}</td>";
        echo "<td>{$product['quantity']}</td>";
        echo "<td>" . formatPrice($product['price'], $currency, $decimals) . "</td>";
        echo "</tr>";
    }
    
    echo "<tr class='table-warning fw-bold'>";
    echo "<td colspan='2' class='text-end'>Tổng cộng</td>";
    echo "<td>" . getTotalQuantity($products) . "</td>";
    echo "<td>" . formatPrice(getTotalPrice($products), $currency, $decimals) . "</td>";
    echo "</tr>";
    
    echo "</tbody>";
    echo "</table>";
}
?>
