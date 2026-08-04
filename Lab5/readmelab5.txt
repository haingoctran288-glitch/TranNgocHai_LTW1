1. Phân biệt MySQL và phpMyAdmin:
- MySQL là một hệ quản trị cơ sở dữ liệu, nơi dữ liệu thực sự được lưu trữ và xử lý.
- phpMyAdmin chỉ là một công cụ có giao diện web để giúp mình thao tác, xem, xóa, sửa dữ liệu trong MySQL bằng cách click chuột thay vì phải gõ lệnh đen thui khó nhớ.

2. Các cách kết nối CSDL trong PHP:
- MySQLi thủ tục: Kiểu viết code cũ, gọi hàm lắt nhắt giống bên C/C++.
- MySQLi hướng đối tượng: Dùng class và tạo object (ví dụ new mysqli), code gọn gàng, dễ quản lý hơn.
- PDO: Kiểu hiện đại nhất, kết nối được nhiều loại CSDL khác nhau chứ không chỉ riêng MySQL.
=> Trong bài Lab 5 này, em sử dụng cách: MySQLi hướng đối tượng.

3. Phân biệt Database, Table, Record, Field:
- Database (Cơ sở dữ liệu): Là một cái kho lớn chứa nhiều cái bảng bên trong.
- Table (Bảng): Là một bảng chứa thông tin về một chủ đề cụ thể (như bảng students chứa sinh viên).
- Field (Trường/Cột): Là các cột thuộc tính của bảng (ví dụ: Mã SV, Họ tên, Tuổi).
- Record (Bản ghi/Dòng): Là một hàng dữ liệu cụ thể trong bảng (ví dụ: thông tin đầy đủ của bạn Nguyễn Văn A).

4. AUTO_INCREMENT và PRIMARY KEY:
- PRIMARY KEY (Khóa chính): Giúp đánh dấu sự độc nhất của một dòng, không cho trùng lặp với dòng khác.
- AUTO_INCREMENT (Tự động tăng): Mỗi khi thêm dòng mới, con số id sẽ tự động nhảy lên (1, 2, 3...) mà mình không cần phải rặn óc suy nghĩ hoặc gõ tay.

5. Phân biệt GET và POST:
- GET: Ném hết dữ liệu lộ liễu lên thanh URL, dễ copy link, thích hợp làm tìm kiếm. Bị giới hạn độ dài.
- POST: Giấu dữ liệu chìm bên trong request, bảo mật hơn, thích hợp gửi form đăng ký, gửi file. Không bị giới hạn chiều dài.

6. Tại sao cần Validate dữ liệu trước khi lưu:
- Để chặn mấy người rảnh rỗi hoặc bot phá hoại nhập tào lao (như để trống, hoặc nhập tuổi bằng chữ).
- Giúp dữ liệu lưu vào kho luôn sạch sẽ, đồng bộ, web không bị lỗi sảng.

7. SQL Injection và Prepared Statement:
- SQL Injection là trò hack mà người ta chèn mã SQL bậy bạ vào form để xóa hoặc lấy trộm dữ liệu của mình.
- Prepared Statement là cách để bịt lỗ hổng đó. Nó biến mọi thứ người dùng nhập vào thành dạng chuỗi bình thường (tham số an toàn), làm cho hacker không thể tiêm lệnh SQL vào được.

8. Tại sao UPDATE/DELETE cần mệnh đề WHERE:
- Nếu mình xài lệnh UPDATE hoặc DELETE mà quên chữ WHERE, nó sẽ xóa hoặc sửa TẤT CẢ các dòng trong bảng. Coi như bay màu cả cái database, khỏi cứu luôn.

9. Export, Import và Backup:
- Export (Xuất): Để xuất toàn bộ CSDL ra thành file .sql.
- Import (Nhập): Để nạp file .sql vào lại phpMyAdmin (chạy ở máy khác hoặc phục hồi).
- Backup: Hành động sao lưu CSDL định kỳ để lỡ server sập hoặc tay nhanh hơn não lỡ xóa nhầm thì còn có file .sql mang ra cứu vãn.
