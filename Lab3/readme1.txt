Sự khác biệt giữa các lệnh nhúng file trong PHP:

1. include: 
- Lệnh này dùng để chèn một file khác vào file đang chạy. 
- Nếu cái file mình chèn bị lỗi hay không tìm thấy, trang web vẫn sẽ chạy tiếp những phần bên dưới, chỉ hiện dòng cảnh báo (Warning) màu cam cam cho mình biết thôi.

2. require:
- Cũng dùng để chèn file luôn.
- Nhưng lệnh này khó chịu hơn, nếu file bị lỗi hoặc gõ sai tên thì trang web sẽ sập luôn (Fatal Error) và dừng chạy ngay lập tức. Em hay dùng cái này cho mấy file quan trọng để lỡ lỗi thì biết ngay.

3. include_once:
- Giống y như lệnh include, nhưng thêm cái là nó sẽ tự động kiểm tra xem file đó đã được chèn vào code trước đó chưa. Nếu lỡ mình chèn rồi thì nó bỏ qua không chèn thêm nữa, đỡ nặng máy.

4. require_once:
- Giống như require, nhưng nó cũng biết tự kiểm tra xem file đã chèn chưa để tránh bị chèn 2 lần liên tiếp làm lỗi trang web.

(Các hình ảnh em chụp màn hình kết quả chạy test thử từng lệnh đã lưu ở trong thư mục assets/images ạ)
