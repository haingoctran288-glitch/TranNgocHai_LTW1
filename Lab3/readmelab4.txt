- Cập nhật chương trình lấy dữ liệu Họ tên từ Form bằng $_GET['fullname']:
Khi người dùng nhập tên vào ô "Họ tên" và nhấn nút Gửi, trình duyệt sẽ gom tên đó và đính kèm lên thanh địa chỉ URL. Ở file PHP, em dùng biến $_GET['fullname'] (phải ghi giống y chang thuộc tính name trong HTML) để lấy cái tên đó ra xài. Khi in thử biến $fullname ra thì nó hiện đúng y cái tên em vừa gõ.

- Trình bày ngắn gọn kết quả sau khi chạy chương trình:
Chạy trang web, điền đầy đủ form, bấm nút Gửi thì trang web tự load lại. Sau đó ở dưới cái Form sẽ xuất hiện thêm 1 cái bảng liệt kê đầy đủ những thông tin mà em vừa điền (Họ tên, tuổi, giới tính, lớp). Nếu dùng form-get.php thì nhìn lên thanh địa chỉ URL sẽ thấy một nùi chữ loằng ngoằng chứa dữ liệu của em, còn form-post.php thì URL vẫn sạch sẽ.

- Sự khác nhau giữa phương thức GET và POST:
o Cách gửi dữ liệu:
  GET: Gói dữ liệu rồi dán lộ liễu lên trên thanh địa chỉ URL của trình duyệt (ví dụ: ?fullname=Hai&tuoi=21). 
  POST: Giấu dữ liệu ngầm bên trong thân của gói tin HTTP nên an toàn và gọn gàng hơn.
o Dữ liệu có hiển thị trên URL hay không:
  GET: Chắc chắn CÓ hiển thị hết lên URL.
  POST: KHÔNG hiển thị gì trên URL cả.
o Trường hợp nào nên sử dụng GET và POST:
  GET: Nên dùng khi cần làm tính năng tìm kiếm, lọc dữ liệu (kiểu như gõ từ khóa lên thanh search Google) hoặc khi truyền mấy dữ liệu không quan trọng. Vì nó bị giới hạn độ dài và dễ bị người khác dòm ngó.
  POST: Nên dùng khi cần gửi mật khẩu, thông tin cá nhân bảo mật, gửi file ảnh, hoặc gửi dữ liệu dạng văn bản quá dài. Nó an toàn hơn và không bị giới hạn ký tự.
