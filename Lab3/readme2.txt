- Mục đích của Function trong PHP:
Function (Hàm) giống như mình đóng gói một đoạn code hay dùng thành một cục riêng. Khi nào cần thì lôi cái tên nó ra gọi là xong, khỏi mắc công copy dán lại đoạn code đó nhiều lần. Code nhìn gọn gàng và dễ tìm lỗi hơn.

- Các Function em đã sử dụng trong bài thực hành này:
1. formatPrice(): để gắn thêm chữ VNĐ hoặc đ vào giá tiền.
2. getTotalQuantity(): để tính tổng xem có bao nhiêu đôi giày/phụ kiện.
3. getTotalPrice(): để cộng tổng tiền lại.
4. showProductTable(): để vẽ ra nguyên cái bảng chứa danh sách sản phẩm.
Ngoài ra em có dùng hàm có sẵn của PHP là number_format() để phẩy giá tiền cho đẹp.

- Các loại Function trong PHP:
Theo em tìm hiểu thì có 2 loại chính:
1. Hàm do mình tự viết ra (User-defined function) - như 4 cái hàm em vừa kể trên.
2. Hàm do PHP làm sẵn (Built-in function) - kiểu như count() hay number_format().

- Các loại function chưa được áp dụng:
Mấy hàm toán học phức tạp hay mấy hàm làm việc với ngày tháng (date, time) thì bài này em chưa cần xài tới.

- Tìm hiểu về Parameters (tham số) trong Function:
1. Có những dạng tham số nào?
- Tham số bình thường: Bắt buộc phải đưa dữ liệu vào thì hàm mới chạy.
- Tham số mặc định (default parameters): Nếu không truyền gì vào thì nó tự lấy giá trị mặc định mình cài sẵn.
- Tham số truyền theo tham chiếu (có dấu &): Sửa trong hàm thì cái biến ở ngoài cũng bị đổi theo.

2. Bài thực hành đã sử dụng những dạng nào?
- Tham số bình thường: $products, $tableTitle (ví dụ phải đưa mảng giày đá bóng vào nó mới in ra bảng).
- Tham số mặc định: $currency = "đ", $decimals = 0. Chỗ này em cài mặc định, nếu không truyền chữ VNĐ thì nó tự hiểu là chữ đ.

3. Những dạng tham số nào chưa được áp dụng?
- Tham số truyền theo tham chiếu (dùng dấu &) em chưa xài vì đọc thấy khó hiểu quá.
Ví dụ: function congThem(&$so) { $so++; }
